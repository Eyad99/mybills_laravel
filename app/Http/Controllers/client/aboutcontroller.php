<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;


class aboutcontroller extends Controller
{

    public function index()
    {
        return view('client.about');
    }


}
