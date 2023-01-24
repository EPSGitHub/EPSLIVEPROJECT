<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\post;
use App\Models\category;
use App\Models\searchabletext;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $data = post::orderBy('id', 'DESC')->get();;
        return view('layouts.post.index',[
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $p= post::find($id);
        $post_cat= Category::all();
        $post_tag= Tag::all();
        return view('layouts.post.update',[
            'post' => $p,
            'post_category' => $post_cat,
            'post_tags' => $post_tag,
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
        $edit_data=post::find($edit_id);

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


        $edit_data -> title_en = $request->entitle;
        $edit_data -> slug=Str::slug($request->entitle);
        $edit_data -> title_bn = $request->bntitle;
        $edit_data -> category= $request->cat;
        $edit_data -> shortdes_en= $request ->shortdes_en;
        $edit_data -> shortdes_bn= $request ->shortdes_bn;
        $edit_data -> description_en= $request ->endes;
        $edit_data -> description_bn= $request ->bndes;
        $edit_data -> seo_title= $request ->seo_title;
        $edit_data -> seo_meta= $request ->seo_meta;
        $edit_data -> alt_en= $request ->enalttext;
        $edit_data -> alt_bn= $request ->bnalttext;
        $edit_data ->images_en = $unique_file_name;
        $edit_data ->images_bn = $unique_bnfile_name;

        $edit_data->Tags()->sync($request->tags);

        $edit_data ->updated_by =Auth::user()->id;
        $edit_data ->update();

        return redirect()->route('post.index') ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_del= post::find($id);
        // unlink('media/post/'.$post_del ->images);
        $post_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }

    /**
     * status Inactive dunction
     */
    public function statusCheckedInactive($id){

        $status_update=post::find($id);
        $status_update -> status = false;
        $status_update -> updated_by =Auth::user()->id;
        $status_update ->update();
        return redirect()->back();
     }

     public function statusCheckedActive($id){

         $status_update=post::find($id);
         $status_update -> status = true;
         $status_update -> updated_by =Auth::user()->id;
         $status_update ->update();
         return redirect()->back();
     }
}
