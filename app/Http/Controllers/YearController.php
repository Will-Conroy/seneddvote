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
                $regionQuery = Region::get()->where('seat_id', $seat->id);
                foreach($regionQuery as $region){
                    array_push($regions, $region);
                    $coordQuery = Coordinate::get()->where('region_id', $region->id);
                    $temp = [];
                    foreach($coordQuery as $coord){
                        array_push($temp,  array($coord->long, $coord->lat));
                    }
                    $coordinates += [$region->name => $temp];
                }
            }else{
                $constituencyQuery = Constituency::get()->where('seat_id', $seat->id);
               
                foreach($constituencyQuery as $constituency){
                    array_push($constituencies, $constituency);
                    $coordQuery = Coordinate::get()->where('constituency_id', $constituency->id);
                    $temp = [];
                    foreach($coordQuery as $coord){
                        array_push($temp,  array($coord->long, $coord->lat));
                    }
                    $coordinates += [$constituency->name => $temp];
                    $representativeQuery = Representative::get()->where('seat_id', $seat->id);
                    $colour = '#f542e9';
                    foreach($representativeQuery as $representative)
                    {
                        $winner = $representative->name;
                        $partyQuery = Party::get()->where('id', $representative->party_id);
                        foreach($partyQuery as $party)
                        {
                            $colour = $party->colour;
                        }
                    }
                    $colours += [$constituency->name => $colour];
                    $winners += [$constituency->name => $winner];
                }
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
