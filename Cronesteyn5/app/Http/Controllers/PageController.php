<?php

namespace App\Http\Controllers;
use App\content;
use App\contact;
use Illuminate\Http\Request;


class pagecontroller extends Controller
{
    public function index()
    {
        $contents = \App\content::where('type','Home')->get();
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
        $contents = content::where('type','Parkvereniging')->get();
        $Bannerfoto = content::where('title','banner foto 1')->get();
        $newsitems = content::where('type', 'newsItem')->get();
        return view('parkvereniging', compact('contents', 'Bannerfoto', 'newsitems'));
    }
    public function contact(){
        return view('contact');
    }
    public function show($id){
        $contact = contact::findOrFail($id);
        return view('admin/contactShow', compact('contact'));
    }

    public function store(){

        $contact = new contact();
        $contact->naam = request('naam');
        $contact->text = request('text');

        $contact->save();


        return redirect('/contact');
    }







}
