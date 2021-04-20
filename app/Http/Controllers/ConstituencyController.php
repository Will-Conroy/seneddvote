<?php

namespace App\Http\Controllers;

use App\Year;
use App\constituency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class constituencyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constituencies = DB::table('constituencies')->simplePaginate(15);
        return view('constituencies.index',['constituencies' => $constituencies]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Constituency $constituency)
    {
        $region = $constituency->region;
        $constitCoordinates = array();
        $coordQuery = $constituency->coordinates;
        $temp = [];
        foreach($coordQuery as $coord)
            array_push($constitCoordinates,  array($coord->long, $coord->lat));

        $regionCoordinates = [];
        $coordQuery = $region->coordinates;
        $temp = [];
        foreach($coordQuery as $coord)
            array_push($regionCoordinates,  array($coord->long, $coord->lat));

    
        $voteOut = array();
        $votes = $constituency->voters;
        foreach($votes as $vote){
            $names = array();
            foreach($vote->party->representatives->where('constituency_id', $constituency->id) as $rep){
                array_push($names, $rep->name);
            }
            array_push($voteOut, ['image' => $vote->party->image, 'party' => ['name' => $vote->party->name, 
            'id' => $vote->party->id], 'votes' => $vote->votes, 'names' => $names]);
        }

        
        $constitWinner = ConstituencyController::get_constituency_results($constituency);
        $regionWinners = YearController::get_region_results($region);

        $year = ['id' =>  $constituency->year->id, 'name' =>  $constituency->year->name];
        return view('constituencies.show',['constituency' => $constitWinner, 'region' => $regionWinners, 'regionCoordinates' => $regionCoordinates,
        'constitCoordinates' => $constitCoordinates, 'votes' =>  $voteOut, 'year' => $year]);    
    }
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByYear(Year $year)
    {
        $constituencies = $year->constituencies;
        return view('constituencies.index',['constituencies' => $constituencies]);  
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByYearName(Year $year, String $name)
    {
        $constituencies = $year->constituencies;
        foreach($constituencies as $constituency){
            if($constituency->name == $name){
                return ConstituencyController::show($constituency);
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


    static public function get_constituency_results(Constituency $constituency){
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
        return ['name' => $constituency->name, 'id' => $constituency->id, 'electorate' => $constituency->electorate, 'votes_cast'=> $constituency->votes_cast,'colour' => $colour, 'seat' => $seatOut, 'regionID' => $constituency->region->id];

    }

}
