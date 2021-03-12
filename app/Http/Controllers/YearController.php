<?php

namespace App\Http\Controllers;

use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Region;
use App\Coordinate;
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
        $regions = [];
        $coordinates = [];
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
                //array_push($coordinates,[isset($seat->region->coordinates['long']),isset($seat->region->coordinates['lat'])]);
            }

        }
    
        

        return view('years.show',['year' => $year,'seats' => $seats ,'regions' => $regions, 'coordinates' =>$coordinates]);

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
