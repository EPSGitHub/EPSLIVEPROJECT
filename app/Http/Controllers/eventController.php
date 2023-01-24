<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\event;
use App\Models\category;
use App\Models\eventCat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class eventController extends Controller
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
        $data = \App\Models\event::all();

        return view('layouts.event.index',[
           'all_data' => $data,

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c= event::find($id);
        $data = eventCat::all();

        return view('layouts.event.update',[

            'event'=> $c,
            'evt_cat' => $data,


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
        $edit_data= event::find($edit_id);

        $unique_file_name='';
        if($request->hasFile('new_image')){
            $img = $request->file('new_image');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/event/'),$unique_file_name);
            // unlink('media/event/'.$request-> old_image);

        }

        else{

            $unique_file_name= $request ->old_image;

        }
        $unique_bnfile_name='';
        if($request->hasFile('new_bnimage')){
            $img = $request->file('new_bnimage');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/event/'),$unique_bnfile_name);
            // unlink('media/event/'.$request-> old_image);

        }

        else{

            $unique_bnfile_name= $request ->old_bnimage;

        }

        $edit_data ->event_date_en =$request->endate;
        $edit_data ->event_date_bn =$request->bndate;
        $edit_data ->event_type_en =$request->entype;
        $edit_data ->title_en =$request->entitle;
        $edit_data ->slug = Str::slug($request->entitle);
        $edit_data ->title_bn =$request->bntitle;
        $edit_data ->short_details_en =$request->shortdes_en;
        $edit_data ->short_details_bn=$request->shortdes_bn;
        $edit_data ->description_en =$request->endes;
        $edit_data ->description_bn =$request->bndes;
        $edit_data ->location_en =$request->enlocation;
        $edit_data ->location_bn =$request->bnlocation;
        $edit_data ->gallery_link =$request->glk;
        $edit_data ->seo_title =$request->seo_title;
        $edit_data ->seo_meta =$request->seo_meta;
        $edit_data ->alt_txt_en =$request->enalttext;
        $edit_data ->alt_txt_bn =$request->bnalttext;
        $edit_data ->updated_by =Auth::user()->id;
        $edit_data ->featured_images_en = $unique_file_name;
        $edit_data ->featured_images_bn = $unique_bnfile_name;
        $edit_data ->update();

            return redirect()->route('eventpost.index') ->with('success','data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_del= event::find($id);
        $post_del ->delete();

        return redirect()->back()->with('delete','Data Deleted Successfully');
    }




     /**
     * status Inactive dunction
     */
    public function statusCheckedInactive($id){

        $status_update=event::find($id);
        $status_update -> status = false;
        $status_update -> updated_by =Auth::user()->id;
        $status_update ->update();
        return redirect()->back();
     }

     public function statusCheckedActive($id){

         $status_update=event::find($id);
         $status_update -> status = true;
         $status_update -> updated_by =Auth::user()->id;
         $status_update ->update();
         return redirect()->back();
     }
}
