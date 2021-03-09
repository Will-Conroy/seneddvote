<?php

namespace App\Http\Controllers;

use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        foreach ($seats as $seat){
            if(!$seat->regional){
                array_push($constituencies, $seat->constituency); 
            }

        }
        return view('years.show',['year' => $year,'seats' => $seats ,'constituencies' => $constituencies]);

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
