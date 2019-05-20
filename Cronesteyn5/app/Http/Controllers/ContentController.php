<?php

namespace App\Http\Controllers;

use App\ContentParkvereniging;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function storeParkvereniging(){

        $ContentParkvereniging = new ContentParkvereniging();
        $ContentParkvereniging->title = request('title');
        $ContentParkvereniging->text = request('text');

        $ContentParkvereniging->save();


        return redirect('/index');
    }
}
