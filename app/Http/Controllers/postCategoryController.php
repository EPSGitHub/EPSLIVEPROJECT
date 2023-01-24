<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postCategoryController extends Controller
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
       $data = category::all();
        return view('layouts.post.category',[
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
        category::create([
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
        $edit_data = Category::find($id);
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

        $edit_data =Category::find($edit_id);
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
        $cat_del= Category::find($id);
     $cat_del ->delete();
       return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
