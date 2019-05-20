<?php

namespace App\Http\Controllers;

use App\content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function storeParkvereniging(){

        $ContentParkvereniging = new content();
        $ContentParkvereniging->title = request('title');
        $ContentParkvereniging->text = request('text');
        $ContentParkvereniging->type = request('type');

        $ContentParkvereniging->save();


        return redirect('/index');
    }
}
