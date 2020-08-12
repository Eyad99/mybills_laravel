<?php

namespace App\Http\Controllers;
use App\question;
use App\User;

use Illuminate\Http\Request;

class questionController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions_water = question::where('status_view', '=', '1')->where('center_type', '=', '0')->get();
        $questions_electricity = question::where('status_view', '=', '1')->where('center_type', '=', '1')->get();
        $questions_telecome = question::where('status_view', '=', '1')->where('center_type', '=', '2')->get();
        return view('public.question', compact('questions_water', 'questions_electricity', 'questions_telecome'));
    }

    
}
