<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventViewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function eventshow(){
        $data = \App\Models\event::all();
        return view('layouts.event.alleventlist',[
           'all_data' => $data
        ]);
    }
}
