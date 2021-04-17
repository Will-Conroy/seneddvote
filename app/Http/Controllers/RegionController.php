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
        return view('regions.show',['region' => $region]);    
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
