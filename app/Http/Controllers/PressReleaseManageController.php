<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\pressrelease;
use Illuminate\Http\Request;
use App\Models\pressCategory;
use Illuminate\Support\Facades\Auth;

class PressReleaseManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pressrelease::all();
        return view('layouts.press.index',[
           'all_data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $p= pressrelease::find($id);
        $post_cat= pressCategory::all();
        return view('layouts.press.update',[
            'post' => $p,
            'post_category' => $post_cat,

        ]);
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
        $edit_id = $id;
        $edit_data=pressrelease::find($edit_id);

        $unique_file_name='';
        if($request->hasFile('new_image')){
            $img = $request->file('new_image');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/post/'),$unique_file_name);
            // unlink('media/event/'.$request-> old_image);

        }

        else{

            $unique_file_name= $request ->old_image;

        }

        $unique_bnfile_name='';
        if($request->hasFile('new_bnimage')){
            $img = $request->file('new_bnimage');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/post/'),$unique_bnfile_name);
            // unlink('media/event/'.$request-> old_image);

        }

        else{

            $unique_bnfile_name= $request ->old_bnimage;

        }


        $edit_data -> title = $request->title;
        $edit_data -> slug=$request->slug;
        $edit_data -> type = $request->type;
        $edit_data -> category= $request->category;
        $edit_data -> shortdes= $request ->shortdes;

        $edit_data -> description= $request ->description;

        $edit_data -> published_by= $request ->publisher;

        $edit_data -> published_date= $request ->publishdate;
        $edit_data -> source_link= $request ->sourcelink;

        $edit_data -> seo_title= $request ->seo_title;
        $edit_data -> seo_meta= $request ->seo_meta;
        $edit_data -> fimg_alt= $request ->fimgalttext;
        $edit_data -> slideimg_alt= $request ->slideralttext;
        $edit_data ->feature_img = $unique_file_name;
        $edit_data ->slide_img = $unique_bnfile_name;

        $edit_data ->updated_by =Auth::user()->id;
        $edit_data ->update();

        return redirect()->route('pressManage.index') ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_del= pressrelease::find($id);
        // unlink('media/post/'.$post_del ->images);
        $post_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }


    public function statusCheckedInactive($id){

        $status_update=pressrelease::find($id);
        $status_update -> status = false;
        $status_update -> updated_by =Auth::user()->id;
        $status_update ->update();
        return redirect()->back();
     }

     public function statusCheckedActive($id){

         $status_update=pressrelease::find($id);
         $status_update -> status = true;
         $status_update -> updated_by =Auth::user()->id;
         $status_update ->update();
         return redirect()->back();
     }
}
