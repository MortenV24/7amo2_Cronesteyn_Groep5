<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function parkvereniging(){
        return view('parkvereniging');
    }

}
