<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
 
    public function will()
    {
        return view('Info.will');
    }


    public function basic()
    {
        return view('Info.basic');
    }
}
