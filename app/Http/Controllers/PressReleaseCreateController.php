<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\pressrelease;
use Illuminate\Http\Request;
use App\Models\pressCategory;
use Illuminate\Support\Facades\Auth;

class PressReleaseCreateController extends Controller
{
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
        $post_cat= pressCategory::all();
        return view('layouts.press.create',[
            'post_category' =>$post_cat,

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
            $img -> move(public_path('media/press/'),$unique_file_name);
        }


        $unique_bnfile_name='';
        if($request->hasFile('bnfimg')){
            $img = $request->file('bnfimg');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/press/'),$unique_bnfile_name);
        }

        $posts =pressrelease::create([

            "title" =>$request->title,
            "slug" => Str::slug($request ->title),

            "type" =>$request->type,
            "category" =>$request->category,


            "shortdes" =>$request->shortdes,

            "description" =>$request->description,

            "published_by" =>$request->publisher,
            "published_date" =>$request->publishdate,
            "source_link" =>$request->sourcelink,

            "seo_title" =>$request->seo_title,
            "seo_meta" =>$request->seo_meta,
            "feature_img" =>$unique_file_name,
            "slide_img" =>$unique_bnfile_name,
            "fimg_alt" =>$request->fimgalttext,
            "slideimg_alt" =>$request->slideralttext,
            "posted_by" => Auth::user()->id
        ]);
        return redirect()->back() ->with('success','press release added successfully');
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
