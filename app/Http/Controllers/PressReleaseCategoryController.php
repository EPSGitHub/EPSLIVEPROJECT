<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\pressCategory;
use Illuminate\Support\Facades\Auth;

class PressReleaseCategoryController extends Controller
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
        $data = pressCategory::all();
        return view('layouts.press.category',[
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
        $this -> validate($request,[

            'cat_name_en' => 'required',
            'cat_name_bn' => 'required',
        ]);
        pressCategory::create([
            'name_en' => $request->cat_name_en,
            'slug' =>Str::slug($request->cat_name_en),
            'name_bn' => $request->cat_name_bn,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success','Category save successfully');
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
        $edit_data = pressCategory::find($id);
        return[
            'id' => $edit_data->id,
            'name_en' => $edit_data->name_en,
            'name_bn' => $edit_data->name_bn,
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

        $this -> validate($request,[

            'cat_name_en' => 'required',
            'cat_name_bn' => 'required',
        ]);

        $edit_id = $request ->cat_id;

        $edit_data =pressCategory::find($edit_id);
        $edit_data ->name_en=$request->cat_name_en;
        $edit_data ->slug=Str::slug($request->cat_name_en);
        $edit_data ->name_bn=$request->cat_name_bn;
        $edit_data -> edited_by= Auth::user()->id;
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
        $cat_del= pressCategory::find($id);
        $cat_del ->delete();
          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
