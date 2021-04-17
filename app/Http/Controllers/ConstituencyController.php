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
        return view('constituencies.show',['constituency' => $constituency]);    
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
