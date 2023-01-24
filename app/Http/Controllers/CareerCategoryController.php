<?php

namespace App\Http\Controllers;
use App\Models\career_cat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerCategoryController extends Controller
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

        $data = career_cat::all();
        return view('layouts.career.category',[
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

            'cat_name' => 'required',
        ]);
        career_cat::create([
            'name' => $request->cat_name,
            'slug' =>Str::slug($request->cat_name),
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success','position added successfully');
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
        $edit_data = career_cat::find($id);
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
        $edit_id = $request ->cat_id;

        $edit_data =career_cat::find($edit_id);
        $edit_data ->name=$request->cat_name;
        $edit_data ->slug=Str::slug($request->cat_name);
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
        $cat_del= career_cat::find($id);
     $cat_del ->delete();
       return redirect()->back()->with('delete','Data Deleted Successfully');
    }


    public function statusCheckedInactive($id){

        $status_update=career_cat::find($id);
        $status_update -> status = false;
        $status_update ->edited_by=Auth::user()->id;
        $status_update ->update();
        return redirect()->back();
     }

     public function statusCheckedActive($id){

         $status_update=career_cat::find($id);
         $status_update -> status = true;
         $status_update ->edited_by=Auth::user()->id;
         $status_update ->update();
         return redirect()->back();
     }
}
