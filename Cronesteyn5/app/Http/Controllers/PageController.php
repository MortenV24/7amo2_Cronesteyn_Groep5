<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class pagecontroller extends Controller
{
    public function index()
    {
        $contents = \App\content::where('type','home')->get();
        return view('index');
    }

    public function parkvereniging(){
        $contents = \App\content::where('type','Parkvereniging')->get();
        $Bannerfoto = \App\content::where('title','banner foto 1')->get();
        $newsitems = \App\content::where('type', 'newsItem')->get();
        return view('parkvereniging', compact('contents', 'Bannerfoto', 'newsitems'));
    }

    public function contentAanmaken(){
        return view('admin/contentAanmaken');
    }




}
