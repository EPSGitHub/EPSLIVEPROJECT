<?php

namespace App\Http\Controllers;

use App\Models\eventCat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class eventCategoryController extends Controller
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
        $data = eventCat::all();
        return view('layouts.event.category',[
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
        eventCat::create([
            'title_en' => $request->entitle,
            'slug_en' =>Str::slug($request->entitle),
            'title_bn' => $request->bntitle,
            'slug_bn' =>Str::slug($request->bntitle),
            'created_by'=>Auth::user()->id,
        ]);

        return redirect()->back()->with('success','Category added successfully');
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
        $edit_data = eventCat::find($id);
        return[
            'id' => $edit_data->id,
            'entitle' => $edit_data->title_en,
            'bntitle' => $edit_data->title_bn,

        ];
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
        $edit_id = $request ->evt_id;

        $edit_data =eventCat::find($edit_id);
        $edit_data ->title_en=$request->entitle;
        $edit_data ->slug_en=Str::slug($request->entitle);
        $edit_data ->title_bn=$request->bntitle;
        $edit_data ->slug_bn=Str::slug($request->bntitle);
        $edit_data ->updated_by=Auth::user()->id;
        $edit_data ->update();

        return redirect()->back() ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat_del= eventCat::find($id);
        $cat_del ->delete();
          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
