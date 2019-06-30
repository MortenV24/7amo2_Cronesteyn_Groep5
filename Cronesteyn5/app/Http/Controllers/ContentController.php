<?php

namespace App\Http\Controllers;

use App\content;
use Illuminate\Http\Request;

class ContentController extends Controller




{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){

        $Content = new content();
        $Content->title = request('title');
        $Content->text = request('text', false);
        $Content->foto = request('foto',false );
        $Content->type = request('type');

        $Content->save();


        return redirect('/dashboard');
    }


    public function edit($id){



        $content = content::find($id);

        return view('admin/contentVeranderen', compact('content'));
    }

    public function update($id){



        $content = content::find($id);

        $content->title = request('title');
        $content->text = request('text', false);
        $content->foto = request('foto',false );
        $content->type = request('type');

        $content->save();
        return redirect('/dashboard');

    }

}
