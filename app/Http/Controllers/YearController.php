<?php

namespace App\Http\Controllers;

use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Region;
use App\Coordinate;
use App\Constituency;
use App\Representative;
use App\Party;
use App\Voter;
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
        $seats = $year->seats;
        $constituencies = [];
        $regions = [];
        $coordinates = [];
        $colours = [];
        $winners = [];

        foreach ($seats as $seat){
            if($seat->regional == True){
            
                $region = $seat->region;
                array_push($regions, $region);

                $coordQuery = $region->coordinates;

                $temp = [];
                foreach($coordQuery as $coord)
                    array_push($temp,  array($coord->long, $coord->lat));
                
                $coordinates += [$region->name => $temp];
                
            }else{
                
                $constituency = $seat->constituency;
                array_push($constituencies, $constituency);

                $coordQuery = $constituency->coordinates;
                $temp = [];

                foreach($coordQuery as $coord)
                    array_push($temp,  array($coord->long, $coord->lat));
                
                $coordinates += [$constituency->name => $temp];
               
                $colour = '#f542e9';
                $winningCount = 0;

                $representativeQuery = $seat->representatives;
                
                foreach($representativeQuery as $representative)
                {
                    $voters = $representative->voters;
                    foreach($voters as $voter){
                        if($voter->seat_id == $seat->id){
                            if($voter->votes > $winningCount){
                                $winningCount = $voter->votes;
                                $winner = $representative;
                                $colour = $representative->party->colour;
                            }
                        }
                    }
                }
                $colours += [$winner->name => $colour];
                $winners += [$constituency->name => $winner];
            }
        }
        return view('years.show',['year' => $year,'seats' => $seats ,'regions' => $regions,'constituencies' => $constituencies,
        'coordinates' => $coordinates, 'colours' => $colours, 'winners' => $winners]);
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
