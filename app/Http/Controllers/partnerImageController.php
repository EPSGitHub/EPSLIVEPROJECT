<?php

namespace App\Http\Controllers;

use App\Models\partnerimage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class partnerImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts = partnerimage::orderBy('order','ASC')->get();

            return view('layouts.settings.partnerimage',compact('posts'));

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


            'name' => 'required',
            'alttxt' => 'required',



        ]);

        $unique_bnfile_name='';
        if($request->hasFile('bnfimg')){
            $img = $request->file('bnfimg');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/settings/partner'),$unique_bnfile_name);
        }


        partnerimage::create([

            "name" =>$request->name,
            "link" =>$request->link,
            "alt_text" =>$request->alttxt,
            "images" =>$unique_bnfile_name,
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
        $data =partnerimage::find($id);
        return view('layouts.settings.update_partner',[
            'data' =>$data,

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


            'name' => 'required',
            'alttxt' => 'required',


        ]);

        $edit_data=partnerimage::find($id);

        $edit_data ->name = $request->name;
        $edit_data -> link = $request->link;
        $edit_data -> alt_text = $request->alttxt;

        $unique_bnfile_name='';
        if($request->hasFile('new_bnimage')){
            $img = $request->file('new_bnimage');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/settings/partner/'),$unique_bnfile_name);


        }

        else{

            $unique_bnfile_name= $request ->old_bnimage;

        }

        $edit_data ->images = $unique_bnfile_name;
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
        $partner_del= partnerimage::find($id);
        $partner_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }

    public function orderupdate(Request $request){
        $posts = partnerimage::all();

        foreach ($posts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['order' => $order['position']]);
                }
            }
        }

        return response('Update Successfully.', 200);

    }
}
