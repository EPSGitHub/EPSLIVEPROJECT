<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\eventCat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class eventCreateController extends Controller
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
        $data = eventCat::all();

        return view('layouts.event.create',[
           'evt_cat' => $data,
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
            $img -> move(public_path('media/event/'),$unique_file_name);
        }


        $unique_bnfile_name='';
        if($request->hasFile('bnfimg')){
            $img = $request->file('bnfimg');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/event/'),$unique_bnfile_name);
        }

        event::create([

            "event_date_en" =>$request->endate,
            "event_date_bn" =>$request->bndate,
            "event_type_en" =>$request->entype,
            "title_en" =>$request->entitle,
            "slug" => Str::slug($request -> entitle),
            "title_bn" =>$request->bntitle,
            "short_details_en" =>$request->shortdes_en,
            "short_details_bn" =>$request->shortdes_bn,
            "description_en" =>$request->endes,
            "description_bn" =>$request->bndes,
            "location_en" =>$request->enlocation,
            "location_bn" =>$request->bnlocation,
            "gallery_link" =>$request->glk,
            "seo_title" =>$request->seo_title,
            "seo_meta" =>$request->seo_meta,
            "featured_images_en" =>$unique_file_name,
            "featured_images_bn" =>$unique_bnfile_name,
            "alt_txt_en" =>$request->enalttext,
            "alt_txt_bn" =>$request->bnalttext,
            "posted_by" => Auth::user()->id
        ]);

        return redirect()->back() ->with('success','Job post added successfully');
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
