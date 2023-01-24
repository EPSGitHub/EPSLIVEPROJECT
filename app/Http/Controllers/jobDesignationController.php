<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\jobDesignation;
use Illuminate\Support\Facades\Auth;

class jobDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jobDesignation::all();
        return view('layouts.career.designation',[
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

            'designation' => 'required',
        ]);
        jobDesignation::create([
            'name' => $request->designation,
            'slug' =>Str::slug($request->designation),
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success','Designation added successfully');
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
        $edit_data = jobDesignation::find($id);
        return[
            'id' => $edit_data->id,
            'name' => $edit_data->name,
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

        $edit_data =jobDesignation::find($edit_id);
        $edit_data ->name=$request->designation;
        $edit_data ->slug=Str::slug($request->designation);
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
        $des_del= jobDesignation::find($id);
        $des_del ->delete();
          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
