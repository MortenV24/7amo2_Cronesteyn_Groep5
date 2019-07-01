<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function contentAanmaken(){
        return view('admin/contentAanmaken');
    }

    public function contentVeranderen(){
        return view('admin/contentVeranderen');
    }
    public function Content(){
        $contents = \App\content::all();
        return view('admin/Content', compact('contents'));
    }
}
