<?php

namespace App\Http\Controllers;

use App\Year;
use App\party;
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
        return view('parties.show',['party' => $party]);    
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

}
