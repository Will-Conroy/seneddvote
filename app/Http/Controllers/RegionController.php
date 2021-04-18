<?php

namespace App\Http\Controllers;

use App\Year;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = DB::table('regions')->simplePaginate(15);
        return view('regions.index',['regions' => $regions]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        $yearID = $region->year->id;
        $yearName = $region->year->name;
        $constitCoordinates = array();
        $constitColours =  array();
        $constitWinners =  array();
        $constituencies = $region->constituencies;
        foreach($constituencies as $constituency)
        {
            $coordQuery = $constituency->coordinates;
            $temp = [];

            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
            
            $constitCoordinates += [$constituency->id => $temp];

            $voters = $constituency->voters;
            $winningCount = 0;

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
            $constitColours += [$winner->id => $colour];
            $constitWinners += [$constituency->id => $winner];
        }

        $regionCoordinates = [];
        $coordQuery = $region->coordinates;
        $colours = array();
        $winners = array();

        $temp = [];
        foreach($coordQuery as $coord)
            array_push($regionCoordinates,  array($coord->long, $coord->lat));
        
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
            array_push($winners, ['image' => $winner->party->image, 'party' =>['name' => $winner->party->name, 'id' => $winner->party->id], 'name'=>$winner->name, 'id' => $winner->id]);
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

        $regionColour = YearController::get_color_from_value($sum);
        
        $seatCount = $region->seats->count();
        $constituencyCount = $region->constituencies->count();
        $votes = $region->voters;
       
        $voteOut = array();
        
        foreach($votes as $vote){
            $names = array();
            foreach($vote->party->representatives->where('region_id', $region->id) as $rep){
                array_push($names, $rep->name);
            }
            array_push($voteOut, ['image' => $vote->party->image, 'party' => ['name' => $vote->party->name, 'id' => $vote->party->id], 'votes' => $vote->votes, 'names' => $names]);
        }
        return view('regions.show',['region' => $region,  'winners' => $winners, 'regionCoordinates' => $regionCoordinates, 'regionColour' => $regionColour, 
        'constituencies' => $constituencies, 'constitCoordinates' => $constitCoordinates, 'constitColours' => $constitColours,
        'constitWinners' => $constitWinners, 'yearID' => $yearID, 'yearName' => $yearName, 'seatCount' => $seatCount, 
        'constituencyCount' => $constituencyCount, 'votes' => $voteOut]);    
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByYear(Year $year)
    {
        $regions = $year->regions;
        return view('regions.index',['regions' => $regions]);  
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByYearName(Year $year, String $name)
    {
        $regions = $year->regions;
        foreach($regions as $region){
            if($region->name == $name){
                return RegionController::show($region);
            }
        }
           
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
