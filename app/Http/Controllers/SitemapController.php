<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(){
        return view('sitemap.xml');
    }

    public function robot(){
        return view('robots');
    }
}
