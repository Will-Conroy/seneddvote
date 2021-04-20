<?php

namespace App\Http\Controllers;

use App\Year;
use App\Region;
use App\Constituency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YearController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = DB::table('years')->simplePaginate(15);
        return view('years.index',['years' => $years]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        $constituencies =  $year->constituencies;
        $regions = $year->regions;
        $coordinates = [];


        $constituencyWinners = array();
        foreach($constituencies as $constituency)
        {
     

            $coordQuery = $constituency->coordinates;
            $temp = [];

            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
            
            $coordinates += [$constituency->name => $temp];

            array_push($constituencyWinners, YearController::get_constituency_results($constituency));
        }

        $regionWinners = array();
        foreach($regions as $region)
        {
            $coordQuery = $region->coordinates;
            $temp = [];
            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
            
            $coordinates += [$region->name => $temp];
            
            array_push($regionWinners, YearController::get_region_results($region));
        }
        return view('years.show',['year' => $year->name,'regions' => $regionWinners, 'constituencies' => $constituencyWinners,
        'coordinates' => $coordinates]);
    }


    //https://stackoverflow.com/questions/4526062/calculating-the-average-color-between-two-colors-in-php-using-an-index-number-a
    static function get_value_of_color($color) {
        // assume $color is in the form #xxxxxx
        return array(
            hexdec(substr($color, 1, 2)),
            hexdec(substr($color, 3, 2)),
            hexdec(substr($color, 5, 2)),
        );
    }

    //https://stackoverflow.com/questions/4526062/calculating-the-average-color-between-two-colors-in-php-using-an-index-number-a
    static function get_color_from_value($value) {
        return sprintf('#%02x%02x%02x', $value[0], $value[1], $value[2]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function get_region_results(Region $region){

        //formate votes into map that is easier to use
        $votes = [];
        $seatsGiven = [];
        $voters = $region->voters;
        $seats = array();

        foreach($voters as $voter){
            $votes += [$voter->party->id => $voter->votes];
            $seatsGiven += [$voter->party->id => 1];
        }

        $regionColours = array();
        $parties = $region->parties;
        $regionSeats = $region->seats;
        foreach($regionSeats as $seat)
        {
            $winningCount = 0;
            foreach($parties as $party)
            {
                if($votes[$party->id] > $winningCount)
                {
                    $seatsGiven[$party->id] += 1;
                    $winningCount = $votes[$party->id];
                    $votes[$party->id] = $votes[$party->id]/$seatsGiven[$party->id];
                    $representatives = $region->representatives;

                    foreach($representatives as $representative)
                        if($representative->party->id == $party->id)
                            $winner = $representative;
                    
                    $colour = $winner->party->colour;
                }
            }
            array_push($regionColours, $colour);
            array_push($seats, ['id' => $seat->id, 'colour' => $colour, 
            'partyName' => $winner->party->name, 'partyImage' => $winner->party->image, 
            'partyID' => $winner->party->id, 'repName' => $winner->name, 'repID' => $winner->id]);
        }

        $colourOfRegion = YearController::get_region_colour($regionColours);
        
        return ['name' => $region->name, 'id' => $region->id, 'colour' => $colourOfRegion, 'seats' => $seats];
    }


    public function get_constituency_results(Constituency $constituency){
        $winningCount = 0;

        $voters = $constituency->voters;
        foreach($voters as $voter)
        {
            if($voter->votes > $winningCount)
            {
                $winningCount = $voter->votes;
                $representatives = $constituency->representatives;
                foreach($representatives as $representative)
                    if($representative->party->id == $voter->party->id)
                        $winner = $representative;
                 
                $colour = $voter->party->colour;
            }
        }
        $seat = $constituency->seat;
        
        $seatOut = ['id' => $seat->id, 'colour' => $colour, 
        'partyName' => $winner->party->name, 'partyImage' => $winner->party->image, 
        'partyID' => $winner->party->id, 'repName' => $winner->name, 'repID' => $winner->id];
        return ['name' => $constituency->name, 'id' => $constituency->id, 'colour' => $colour, 'seat' => $seatOut, 'regionID' => $constituency->region->id];

    }

    public function get_region_colour($regionColours){
        $sum = array(0,0,0);
        foreach($regionColours as $regionColour){
            $temp = YearController::get_value_of_color($regionColour);
            $sum[0] += $temp[0];
            $sum[1] += $temp[1];
            $sum[2] += $temp[2];
        }
        $sum[0] = $sum[0]/count($regionColours);
        $sum[1] = $sum[1]/count($regionColours);
        $sum[2] = $sum[2]/count($regionColours);

        return YearController::get_color_from_value($sum);
    }

}
