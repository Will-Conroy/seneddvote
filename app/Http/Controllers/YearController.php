<?php

namespace App\Http\Controllers;

use App\Year;
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
        $seats = [];
        $coordinates = [];
        $colours = [];
        $winners = [];
        foreach($constituencies as $constituency)
        {
            $seat = $constituency->seat;
            array_push($seats, $seat);

            $coordQuery = $constituency->coordinates;
            $temp = [];

            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
            
            $coordinates += [$constituency->name => $temp];
           
            $colour = '#f542e9';
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
            $colours += [$winner->name => $colour];
            $winners += [$constituency->name => $winner];
            }

        foreach($regions as $region)
        {

            $coordQuery = $region->coordinates;

            $temp = [];
            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
            
            $coordinates += [$region->name => $temp];
            
            $votes = [];
            $seatsGiven = [];

            
            $voters = $region->voters;
            foreach($voters as $voter){
                $votes += [$voter->party->id => $voter->votes];
                $seatsGiven += [$voter->party->id => 1];

            }

            $regionColours = array();
            $parties = $region->parties;
            $regionSeats = $region->seats;
            foreach($regionSeats as $seat)
            {
                array_push($seats, $seat);
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
                $colours += [$winner->name => $colour];
                $winners += [$seat->id => $winner];
            }
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
            $colours += [$region->name => YearController::get_color_from_value($sum)];
            
        }
        return view('years.show',['year' => $year,'seats' => $seats ,'regions' => $regions,'constituencies' => $constituencies,
        'coordinates' => $coordinates, 'colours' => $colours, 'winners' => $winners]);
    }


    //https://stackoverflow.com/questions/4526062/calculating-the-average-color-between-two-colors-in-php-using-an-index-number-a
    function get_value_of_color($color) {
        // assume $color is in the form #xxxxxx
        return array(
            hexdec(substr($color, 1, 2)),
            hexdec(substr($color, 3, 2)),
            hexdec(substr($color, 5, 2)),
        );
    }

    //https://stackoverflow.com/questions/4526062/calculating-the-average-color-between-two-colors-in-php-using-an-index-number-a
    function get_color_from_value($value) {
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

}
