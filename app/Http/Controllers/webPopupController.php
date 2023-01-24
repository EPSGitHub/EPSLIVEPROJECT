<?php

namespace App\Http\Controllers;

use App\Models\webpopup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class webPopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = webpopup::all();
        return view('layouts.settings.popup',[
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


            'texten' => 'required',
            'textbn' => 'required',
            'enbtntxt' => 'required',
            'bnbtntxt' => 'required',
            'link' => 'required',



        ]);

        $unique_bnfile_name='';
        if($request->hasFile('bnfimg')){
            $img = $request->file('bnfimg');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/settings/popup'),$unique_bnfile_name);
        }


        webpopup::create([

            "popuptext_en" =>$request->texten,
            "popuptext_bn" =>$request->textbn,
            "button_text_en" =>$request->enbtntxt,
            "button_text_bn" =>$request->bnbtntxt,
            "link" =>$request->link,
            "image" =>$unique_bnfile_name,
            "created_by" => Auth::user()->id



        ]);
        return redirect()->back() ->with('success','press release added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $popup =webpopup::find($id);
        return view('layouts.settings.update',[
            'data' =>$popup,

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

        $this -> validate($request,[


            'texten' => 'required',
            'textbn' => 'required',
            'enbtntxt' => 'required',
            'bnbtntxt' => 'required',
            'link' => 'required',



        ]);

        $edit_data=webpopup::find($id);

        $edit_data -> popuptext_en = $request->texten;
        $edit_data -> popuptext_bn = $request->textbn;
        $edit_data -> button_text_en = $request->enbtntxt;
        $edit_data -> button_text_bn = $request->bnbtntxt;
        $edit_data -> link = $request->link;

        $unique_bnfile_name='';
        if($request->hasFile('new_bnimage')){
            $img = $request->file('new_bnimage');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/settings/popup/'),$unique_bnfile_name);


        }

        else{

            $unique_bnfile_name= $request ->old_bnimage;

        }

        $edit_data ->image = $unique_bnfile_name;
        $edit_data ->updated_by =Auth::user()->id;

        $edit_data ->update();
        return redirect()->back()->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup_del= webpopup::find($id);
        $popup_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }


    /**
     * status Inactive dunction
     */
    public function statusCheckedInactive($id){

        $status_update=webpopup::find($id);
        $status_update -> status = false;
        $status_update -> updated_by =Auth::user()->id;
        $status_update ->update();
        return redirect()->back();
     }

     public function statusCheckedActive($id){

         $status_update=webpopup::find($id);
         $status_update -> status = true;
         $status_update -> updated_by =Auth::user()->id;
         $status_update ->update();
         return redirect()->back();
     }
}
