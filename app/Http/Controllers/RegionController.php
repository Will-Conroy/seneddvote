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
        return view('Regions.index',['regions' => $regions]);
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
            $constitCoordinates += [$constituency->id => $constituency->coordinates->first()->LatLong];
            array_push($constituencyWinners, YearController::get_constituency_results($constituency));
        }

        $regionCoordinates = $region->coordinates->first()->LatLong;
        
        $votes = [];
        $seatsGiven = [];
        $voters = $region->voters;
        foreach($voters as $voter)
        {
            $votes += [$voter->party->id => $voter->votes];
            $seatsGiven += [$voter->party->id => 1];
        }

        $regionWinners = RegionController::get_region_results($region, $constituencyWinners);

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
        return view('Regions.show',['region' => $regionWinners, 'regionCoordinates' => $regionCoordinates,'constituencies' => $constituencyWinners, 
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
        return view('Regions.index',['regions' => $regions]);  
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


    static public function get_region_results(Region $region, $constituencyWinners){

        $votes = [];
        $seatsGiven = [];
        $voters = $region->voters;
        $seats = array();
        $totalVotes =[];
        foreach($voters as $voter){
            
            $seatsGiven += [$voter->party->id => 1];
            $votes += [$voter->party->id => 0];
            $totalVotes += [$voter->party->id => $voter->votes];
        }
        
        foreach($constituencyWinners as $con){
            if($con['regionID'] ==  $region->id)
                $seatsGiven[$con['seat']['partyID']] += 1;
        }

        $regionColours = array();
        $parties = $region->parties;
        $regionSeats = $region->seats;
        
        foreach($regionSeats as $seat)
        {
            
            $winningCount = 0;
            $winnerId = 0;
            foreach($parties as $party)
            {
                $votes[$party->id] = $totalVotes[$party->id]/$seatsGiven[$party->id];
                if($votes[$party->id] > $winningCount)
                {
                    $winningCount = $votes[$party->id];
                    $winnerId = $party->id;
                }

            }
            $seatsGiven[$winnerId ] += 1;
            $representatives = $region->representatives;

            foreach($representatives as $representative)
                if($representative->party->id ==$winnerId)
                    $winner = $representative;
            
            $colour = $winner->party->colour;
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
