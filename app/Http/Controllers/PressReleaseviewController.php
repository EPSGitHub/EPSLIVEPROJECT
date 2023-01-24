<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressReleaseviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pressView(){
        $data = \App\Models\pressrelease::all();
        return view('layouts.press.pressview',[
           'all_data' => $data
        ]);
    }
}
