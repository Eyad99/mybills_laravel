<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\place;
use Illuminate\Http\Request;

class placeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places_water=place::where('center_type','=','0')->get();
        $places_electricity=place::where('center_type','=','1')->get();
        $places_telecome=place::where('center_type','=','2')->get();
        return view('public.place',compact('places_water','places_electricity','places_telecome'));
    }

  

    
}
