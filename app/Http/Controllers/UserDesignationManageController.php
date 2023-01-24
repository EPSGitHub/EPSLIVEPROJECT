<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\UserDesignation;
use Illuminate\Http\Request;

class UserDesignationManageController extends Controller
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
        $all_data =UserDesignation::all();
        return view('layouts.user.designation',compact('all_data'));
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

            'des_name' => 'required',
        ]);
        UserDesignation::create([
            'name' => $request->des_name,
            'slug' =>Str::slug($request->des_name),
            'created_by'=> Auth::user()->id,
        ]);

        return redirect()->back()->with('success','Designation Added successfully');
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
        $edit_data = UserDesignation::find($id);
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

        $edit_data =UserDesignation::find($edit_id);
        $edit_data ->name=$request->des_name;
        $edit_data ->slug=Str::slug($request->des_name);
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
        $dep_del= UserDesignation::find($id);
        $dep_del ->delete();
          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
