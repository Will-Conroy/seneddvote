<?php

namespace App\Http\Controllers;

use App\Year;
use App\Party;
use App\Constituency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class partyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties = DB::table('parties')->simplePaginate(15);
        return view('Parties.index',['parties' => $parties]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(party $party)
    {
        $year = $party->year->name;
        $regionalVotersAll = $party->voters->whereNotNull('region_id');
        $regionalVoters = array();
        foreach($regionalVotersAll as $vote)
            array_push($regionalVoters, ['name' => $vote->region->name, 'id' =>$vote->region->id, 'votes' => $vote->votes, 'seats' => 0]);

        $constituencyVotersAll = $party->voters->whereNotNull('constituency_id');
        $constituencyVoters = array();
        foreach($constituencyVotersAll as $vote)
            array_push($constituencyVoters, ['name' => $vote->constituency->name, 'id' => $vote->constituency->id, 'votes' => $vote->votes, 'seats' => 0]);
        $regions = $party->regions;
        $regionResults = array();
        $coordinates = [];
        
        foreach($regions as $region){
            $constresutls = array();
            foreach($region->constituencies as $constituencyIntReg){
                array_push($constresutls,YearController::get_constituency_results($constituencyIntReg));
            }
           
            $results = RegionController::get_region_results($region,  $constresutls);
            array_push($regionResults,  $results);
            foreach($results['seats'] as $seat){
                if($seat['partyID'] == $party->id){
                    foreach($regionalVoters as &$voter){
                        if($voter['name'] == $region->name)
                            $voter['seats'] += 1;
                    }
                }
            }
            
           
            $coordinates += [$region->name => $region->coordinates->first()->LatLong];
        }

        $constituencies = $party->constituencies;
        $constituencyResults = array();
        foreach($constituencies as $constituency){
            $results = PartyController::get_constituency_results($constituency, $party->id);
            array_push($constituencyResults, $results);
            if($results['seat']['partyID'] == $party->id){
                foreach($constituencyVoters as &$voter){
                    if($voter['name'] == $constituency->name)
                        $voter['seats'] = 1;
                }
            }
            $coordinates += [$constituency->name => $constituency->coordinates->first()->LatLong];
        }

        $constituencySeatTotal = 0;
        foreach($constituencyVoters as $votes)
            $constituencySeatTotal += $votes['seats'];
        
        $regionSeatTotal = 0;
        foreach($regionalVoters as $votes)
            $regionSeatTotal += $votes['seats'];
        
        return view('Parties.show',['party' => $party, 'constituencies' => $constituencyResults, 'regions' => $regionResults,
        'coordinates' => $coordinates, 'year' => $year, 'constituencyVotes' => $constituencyVoters, 'regionalVotes' => $regionalVoters,
        'regionSeatTotal' => $regionSeatTotal, 'constituencySeatTotal' => $constituencySeatTotal ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByYearName(Year $year, String $name)
    {
        $parties = $year->parties;
        foreach($parties as $party){
            if($party->name == $name){
                return partyController::show($party);
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

    static public function get_constituency_results(Constituency $constituency, $partyID){
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
        $op = 0.05;
        if($winner->party->id ==$partyID)
            $op = 0.7;
        $seatOut = ['id' => $seat->id, 'colour' => $colour, 
        'partyName' => $winner->party->name, 'partyImage' => $winner->party->image, 
        'partyID' => $winner->party->id, 'repName' => $winner->name, 'repID' => $winner->id, 'opacity' => $op];
        return ['name' => $constituency->name, 'id' => $constituency->id, 'electorate' => $constituency->electorate, 'votes_cast'=> $constituency->votes_cast,'colour' => $colour, 'seat' => $seatOut, 'regionID' => $constituency->region->id];

    }
}
