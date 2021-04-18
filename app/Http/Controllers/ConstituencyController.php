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
        $constitColours = $colour;
        $constitWinner =  ['party' => ['image' => $winner->party->image, 'id' => $winner->party->id, 'name' => $winner->party->name],
                            'name' => $winner->name, 'id' => $winner->id];

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
            array_push($winners, ['image' => $winner->party->image, 'party' =>['name' => $winner->party->name, 
            'id' => $winner->party->id], 'name'=>$winner->name, 'id' => $winner->id]);
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
        $votes = $constituency->voters;
       
        $voteOut = array();
        
        foreach($votes as $vote){
            $names = array();
            foreach($vote->party->representatives->where('constituency_id', $constituency->id) as $rep){
                array_push($names, $rep->name);
            }
            array_push($voteOut, ['image' => $vote->party->image, 'party' => ['name' => $vote->party->name, 
            'id' => $vote->party->id], 'votes' => $vote->votes, 'names' => $names]);
        }

        $regionOut = ['id' => $region->id, 'name' => $region->name];
        $year = ['id' =>  $constituency->year->id, 'name' =>  $constituency->year->name];
        return view('constituencies.show',['constituency' => $constituency, 'region' => $regionOut, 'regionCoordinates' => $regionCoordinates,
        'regionColour' => $regionColour, 'constitCoordinates' => $constitCoordinates, 'constitColours' => $constitColours, 'votes' =>  $voteOut,
        'year' => $year, 'constitWinner' => $constitWinner]);    
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

}
