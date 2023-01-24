<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fullTextSearch;
use Illuminate\Support\Facades\Auth;

class fullTextSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = fullTextSearch::all();
        return view('layouts.settings.fulltext',[
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

        fullTextSearch::create([
            'title_en' => $request->entitle,
            'title_bn' => $request->bntitle,
            'des_en' => $request->endes,
            'des_bn' => $request->bndes,
            'link_en' => $request->enlink,
            'link_bn' => $request->bnlink,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success','Item save successfully');
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
        $searchTxt =fullTextSearch::find($id);
        return view('layouts.settings.fulltext_update',[
            'data' =>$searchTxt,

        ]);
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

        $edit_data =fullTextSearch::find($id);
        $edit_data ->title_en=$request->entitle;
        $edit_data ->title_bn=$request->bntitle;
        $edit_data ->des_en=$request->endes;
        $edit_data ->des_bn=$request->bndes;
        $edit_data ->link_en=$request->enlink;
        $edit_data ->link_bn=$request->bnlink;
        $edit_data -> updated_by= Auth::user()->id;
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
        $full_text= fullTextSearch::find($id);
        $full_text ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
