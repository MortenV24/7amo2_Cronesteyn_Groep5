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
        $contents = \App\content::all();
        return view('parkvereniging', compact('contents'));
    }

    public function contentAanmaken(){
        return view('admin/contentAanmaken');
    }




}
