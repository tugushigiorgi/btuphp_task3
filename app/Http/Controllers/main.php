<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class main extends Controller
{
    //

    function index(){

        $all_data=video::all();




        return view('index',["data"=> $all_data]);


    }

}
