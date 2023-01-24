<?php

namespace App\Http\Controllers;

use App\Models\career_cat;
use App\Models\jobIdPrefix;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobPrefixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jobIdPrefix::all();
        $job_dept= career_cat::all();
        return view('layouts.career.job_prefix',[
           'all_data' => $data,
           'job_department' =>$job_dept,
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

            'department' => 'required',
            'prefix' => 'required',
        ]);
        jobIdPrefix::create([
            'department' => $request->department,
            'slug' =>Str::slug($request->department),
            'prefix_id' => $request->prefix,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success','Job Prefix added successfully');
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
        $edit_data = jobIdPrefix::find($id);
        return[
            'id' => $edit_data->id,
            'name' => $edit_data->prefix_id,
            'department' => $edit_data->department,
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
        $edit_id = $request ->id;

        $edit_data =jobIdPrefix::find($edit_id);
        $edit_data ->department=$request->department;
        $edit_data ->slug=Str::slug($request->department);
        $edit_data ->prefix_id=$request->prefix_id;
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
        $prefix_del= jobIdPrefix::find($id);
        $prefix_del ->delete();
          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
