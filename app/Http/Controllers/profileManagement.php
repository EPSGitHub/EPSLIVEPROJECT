<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class profileManagement extends Controller
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
        $did =Crypt::decrypt($id);
        $p= User::find($did);
        return view('layouts.user.profile',[
            'user_data' => $p
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
            'phone' => ['required','min:11','regex:/(01)[0-9]{9}/'],
            'address' => 'required',

        ]);


        $unique_file_name='';
        if($request->hasFile('new_image')){
            $img = $request->file('new_image');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('admin/assets/img/profiles'),$unique_file_name);

        }

        else{

            $unique_file_name= $request ->old_image;

        }



        $edit_id = $id;
        $edit_data=User::find($edit_id);
        $edit_data -> name = $request->name;
        $edit_data -> phone= $request->phone;
        $edit_data -> address= $request->address;
        $edit_data ->image = $unique_file_name;
        $edit_data -> edited_by= Auth::user()->id;
        $edit_data ->update();

        return redirect()->back()->with('success','Profile Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
