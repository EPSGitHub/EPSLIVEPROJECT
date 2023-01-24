<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    // show admin login panel

    public function LoginPage(){
        return view('layouts.login');
    }
}
