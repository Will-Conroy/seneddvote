<?php

namespace App\Http\Controllers;

use App\Party;
use App\Representative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class representativeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representatives = DB::table('representatives')->simplePaginate(15);
        return view('representatives.index',['representatives' => $representatives]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(representative $representative)
    {
        return view('representatives.show',['representative' => $representative]);    
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByParty(Party $party)
    {
        $representatives = $party->representatives;
        return view('representatives.index',['representatives' => $representatives]);  
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByPartyName(Party $party, String $name)
    {
        $representatives = $party->representatives;
        foreach($representatives as $representative){
            if($representative->name == $name){
                return representativeController::show($representative);
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
