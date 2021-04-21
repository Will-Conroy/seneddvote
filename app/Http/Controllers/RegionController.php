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

        $year = ['name' => $region->year->name, 'id'=> $region->year->id];
        $constitCoordinates = array();
        $constituencies = $region->constituencies;
        $constituencyWinners = array();
        foreach($constituencies as $constituency)
        {
            $coordQuery = $constituency->coordinates;
            $temp = [];

            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
            
            $constitCoordinates += [$constituency->id => $temp];
            array_push($constituencyWinners, YearController::get_constituency_results($constituency));
        }

        $regionCoordinates = [];
        $coordQuery = $region->coordinates;

        $temp = [];
        foreach($coordQuery as $coord)
            array_push($regionCoordinates,  array($coord->long, $coord->lat));
        
        $votes = [];
        $seatsGiven = [];
        $voters = $region->voters;
        foreach($voters as $voter)
        {
            $votes += [$voter->party->id => $voter->votes];
            $seatsGiven += [$voter->party->id => 1];
        }

        $regionWinners = RegionController::get_region_results($region);

        $votes = $region->voters;
       
        $voteOut = array();
        
        foreach($votes as $vote)
        {
            $names = array();
            foreach($vote->party->representatives->where('region_id', $region->id) as $rep)
            {
                array_push($names, $rep->name);
            }
            array_push($voteOut, ['image' => $vote->party->image, 'party' => ['name' => $vote->party->name, 'id' => $vote->party->id], 'votes' => $vote->votes, 
            'names' => $names]);
        }
        return view('regions.show',['region' => $regionWinners, 'regionCoordinates' => $regionCoordinates,'constituencies' => $constituencyWinners, 
        'constitCoordinates' => $constitCoordinates, 'year' => $year, 'votes' => $voteOut]);    
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


    static public function get_region_results(Region $region){

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
        $seatCount = $region->seats->count();
        $constituencyCount = $region->constituencies->count();
        
        return ['name' => $region->name, 'id' => $region->id, 'electorate' => $region->electorate, 'votes_cast'=> $region->votes_cast, 'seatCount' => $seatCount, 
        'constituencyCount' => $constituencyCount, 'colour' => $colourOfRegion, 'seats' => $seats];
    }


}
