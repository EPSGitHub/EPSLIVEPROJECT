<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postTagController extends Controller
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
        $data = Tag::all();
        return view('layouts.post.tag',[
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

            'tag_name_en' => 'required',
            'tag_name_bn' => 'required',
        ]);
        Tag::create([
            'name_en' => $request->tag_name_en,
            'slug' =>Str::slug($request->tag_name_en),
            'name_bn' => $request->tag_name_bn,
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
        $edit_data = Tag::find($id);
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
        $edit_id = $request ->tag_id;

        $edit_data =Tag::find($edit_id);
        $edit_data ->name_en=$request->tag_name_en;
        $edit_data ->slug=Str::slug($request->tag_name_en);
        $edit_data ->name_bn=$request->tag_name_bn;
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
        $tag_del = Tag::find($id);
        $tag_del ->delete();
        return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
