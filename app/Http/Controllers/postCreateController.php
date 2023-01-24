<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\post;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postCreateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post_cat= category::all();
        $post_tag= Tag::all();
        return view('layouts.post.create',[
            'post_category' =>$post_cat,
            'post_tags' => $post_tag
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unique_file_name='';
        if($request->hasFile('enfimg')){
            $img = $request->file('enfimg');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/post/'),$unique_file_name);
        }


        $unique_bnfile_name='';
        if($request->hasFile('bnfimg')){
            $img = $request->file('bnfimg');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/post/'),$unique_bnfile_name);
        }

        $posts =post::create([

            "title_en" =>$request->entitle,
            "slug" => Str::slug($request -> entitle),
            "title_bn" =>$request->bntitle,

            "category" =>$request->entype,


            "shortdes_en" =>$request->shortdes_en,
            "shortdes_bn" =>$request->shortdes_bn,
            "description_en" =>$request->endes,
            "description_bn" =>$request->bndes,

            "seo_title" =>$request->seo_title,
            "seo_meta" =>$request->seo_meta,
            "images_en" =>$unique_file_name,
            "images_bn" =>$unique_bnfile_name,
            "alt_en" =>$request->enalttext,
            "alt_bn" =>$request->bnalttext,
            "posted_by" => Auth::user()->id
        ]);
        $posts->Tags()->attach($request->tags);
        return redirect()->back() ->with('success','Blog post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
