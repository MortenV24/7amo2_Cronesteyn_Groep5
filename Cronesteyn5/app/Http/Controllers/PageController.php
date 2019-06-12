<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class pagecontroller extends Controller
{
    public function index()
    {
        $contents = \App\content::where('type','home')->get();
        $backgroundimage = \App\content::where('title', 'backgroundsquirrel')->get();
        return view('index', compact('contents','backgroundimage'));
    }

    public function activiteiten() {
        $contents = \App\content::where('type','activiteiten')->get();
        $Bannerfoto = \App\content::where('title','banner foto 1')->get();
        $newsitems = \App\content::where('type', 'newsItem')->get();
        return view('activiteiten', compact('contents','Bannerfoto','newsitems'));
    }
    public function vogelwerkgroep() {
        $contents = \App\content::where('type','Vogelwerkgroep')->get();
        $Bannerfoto = \App\content::where('title','banner foto 1')->get();
        return view('vogelwerkgroep', compact('contents', 'Bannerfoto'));
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
