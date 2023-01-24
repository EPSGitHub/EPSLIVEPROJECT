<?php

namespace App\Http\Controllers;

use App\Models\UserDepartment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserDeparmentManageController extends Controller
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
        $all_data =UserDepartment::all();
        return view('layouts.user.department',compact('all_data'));

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

            'dept_name' => 'required',
        ]);
        UserDepartment::create([
            'name' => $request->dept_name,
            'slug' =>Str::slug($request->dept_name),
            'created_by'=> Auth::user()->id,
        ]);

        return redirect()->back()->with('success','Department Added successfully');
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
        $edit_data = UserDepartment::find($id);
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

        $edit_data =UserDepartment::find($edit_id);
        $edit_data ->name=$request->dept_name;
        $edit_data ->slug=Str::slug($request->dept_name);
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
        $dep_del= UserDepartment::find($id);
        $dep_del ->delete();
          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
