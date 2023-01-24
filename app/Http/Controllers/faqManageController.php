<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\faqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class faqManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = faq::all();
        return view('layouts.faq.index',[
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
        $data = faq::all();
        return view('layouts.faq.create',[
           'all_data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $faq_cat= faqCategory::all();
        $faqs=faq::find($id);
        return view('layouts.faq.update',[
            'faq_category' =>$faq_cat,
            'faq' =>$faqs,

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
        $edit_id = $id;
        $edit_data=faq::find($edit_id);

        $edit_data -> ques_en = $request->entitle;
        $edit_data -> ques_bn = $request->bntitle;
        $edit_data -> category = $request->entype;
        $edit_data -> des_en = $request->endes;
        $edit_data -> des_bn = $request->bndes;
        $edit_data -> updated_by = Auth::user()->id;
        $edit_data ->update();

        return redirect()->route('faqs.index') ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq_del= faq::find($id);
        $faq_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }


    public function statusCheckedInactive($id){

        $status_update=faq::find($id);
        $status_update -> status = false;
        $status_update -> updated_by =Auth::user()->id;
        $status_update ->update();
        return redirect()->back();
     }

     public function statusCheckedActive($id){

         $status_update=faq::find($id);
         $status_update -> status = true;
         $status_update -> updated_by =Auth::user()->id;
         $status_update ->update();
         return redirect()->back();
     }

}
