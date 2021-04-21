<?php

namespace App\Http\Controllers;

use App\Year;
use App\party;
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
        return view('parties.index',['parties' => $parties]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(party $party)
    {
        $regions = $party->regions;
        $regionResults = array();
        $coordinates = [];
        
        foreach($regions as $region){
            array_push($regionResults,  RegionController::get_region_results($region));
            $coordQuery = $region->coordinates;
            $temp = [];

            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
    
            $coordinates += [$region->name => $temp];

            $year = $region->year->name;
        }


        $constituencies = $party->constituencies;
        $constituencyResults = array();
        
        foreach($constituencies as $constituency){
          
            array_push($constituencyResults, PartyController::get_constituency_results($constituency, $party->id));

            $coordQuery = $constituency->coordinates;
            $temp = [];

            foreach($coordQuery as $coord)
                array_push($temp,  array($coord->long, $coord->lat));
    
            $coordinates += [$constituency->name => $temp];
            $year = $region->year->name;
        }

        return view('parties.show',['party' => $party, 'constituencies' => $constituencyResults, 'regions' => $regionResults,
        'coordinates' => $coordinates, 'year' => $year]);
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
