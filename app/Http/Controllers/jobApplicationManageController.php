<?php

namespace App\Http\Controllers;

use App\Models\jobapplication;
use Illuminate\Http\Request;

class jobApplicationManageController extends Controller
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
        $data = jobapplication::whereIn('status', [1])->get();
        return view('layouts.career.jobapplication',[
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
        $data = jobapplication::find($id);
        return view('layouts.career.jobapplication',[
           'all_data' => $data
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_del= jobapplication::find($id);
        unlink('media/resume/'.$post_del ->attachment);
        $post_del ->delete();

          return redirect()->back()->with('delete','Application Deleted Successfully');
    }



    public function applicantview($id)
    {

       $data = jobapplication::Where ('job_id','=',$id) ->get();
       $a = $id;


      return view('layouts.career.jobapplicationlist',[
            'all_data' => $data,
            'c' => $a,
         ]);

    }


    public function shortlist($id){

        $status_update=jobapplication::find($id);

        if($status_update -> status == 2){
            $status_update -> status = 5;

        }

        else{
            $status_update -> status = 2;
        }




        $status_update ->update();
        return redirect()->back();
     }




    public function ApplicationRejected($id){

        $status_update=jobapplication::find($id);
        $status_update -> status = 3;
        $status_update ->update();
        return redirect()->back();
     }
    public function Applicanthired($id){

        $status_update=jobapplication::find($id);
        $status_update -> status = 4;
        $status_update ->update();
        return redirect()->back();
     }

    public function Checked($id){

        $status_update=jobapplication::find($id);
        $status_update -> status = 5;
        $status_update ->update();
        return redirect()->back();
     }



    public function rejected($id){

        $data = jobapplication::Where ('job_id','=',$id)->where('status','=','3')->get();
        $a=$id;
        return view('layouts.career.jobapplicationlist',[
           'all_data' => $data,
           'c' => $a,
        ]);
     }
    public function shortlisted($id){

        $data = jobapplication::Where ('job_id','=',$id)->where('status','=','2')->get();
        $a=$id;
        return view('layouts.career.jobapplicationlist',[
           'all_data' => $data,
           'c' => $a,
        ]);
     }
    public function Hired($id){

        $data = jobapplication::Where ('job_id','=',$id)->where('status','=','4')->get();
        $a=$id;
        return view('layouts.career.jobapplicationlist',[
           'all_data' => $data,
           'c' => $a,
        ]);
     }

     public function Statchecked($id){

        $data = jobapplication::Where ('job_id','=',$id)->where('status','=','5')->get();
        $a=$id;
        return view('layouts.career.jobapplicationlist',[
           'all_data' => $data,
           'c' => $a,
        ]);
     }
     public function allApplication($id){

        $data = jobapplication::Where('job_id','=',$id)->get();
        $a=$id;
        return view('layouts.career.jobapplicationlist',[
           'all_data' => $data,
           'c' => $a,
        ]);
     }


}
