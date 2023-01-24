<?php

namespace App\Http\Controllers;

use App\Models\career;
use App\Models\career_cat;
use App\Models\jobDesignation;
use App\Models\jobIdPrefix;
use App\Models\User;
use App\Models\UserDesignation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
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
        $data = career::orderBy('id', 'DESC')->get();
        return view('layouts.career.index',[
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
        $jd = jobDesignation::all();
        $post_cat= career_cat::all();
        $job_prefix=jobIdPrefix::all();
        return view('layouts.career.create',[
            'post_category' =>$post_cat,
            'dept_prefix' =>$job_prefix,
            'user_des' =>$jd,

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
        $this -> validate($request,[

            'job_title' => 'required',
            'job_id' => 'required|unique:careers',
            'job_type' =>'required',
            'job_position' =>'required',
            'designation' =>'required',
            'vacancy' =>'required',
            'description' =>'required',
            'salary' =>'required',
            'apply_deadline' =>'required',


        ]);

        if($request->status==''){
            $status=1;
        }

        else{
            $status=$request->status;
        }

        career::create([
            "title" =>$request->job_title,
            "slug" => Str::slug($request -> job_title).'-'.$request->job_id,
            "job_id" =>$request->job_id,
            "job_type" => $request->job_type,
            "category" =>$request->job_position,
            "designation" =>$request->designation,
            "vacancy" =>$request->vacancy,
            "experiance" =>$request->experiance,
            "location" =>$request->location,
            "salary" =>$request->salary,
            "description" => $request->description,
            "apply_deadline" => $request->apply_deadline,
            "status" => $status,
            "posted_by" => Auth::user()->id,
            "edited_by" => Auth::user()->id,
        ]);

        return redirect()->route('careers.index') ->with('success','Job post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $c= career::find($id);
        return view('layouts.career.view',[
            'career'=> $c,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c= career::find($id);
        $post_cat= career_cat::all();
        $jd = jobDesignation::all();

        return view('layouts.career.update',[

            'career'=> $c,
            'post_category' => $post_cat,
            'user_des' =>$jd,

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
        $edit_data=career::find($edit_id);
            $edit_data ->title =$request->job_title;
            $edit_data ->slug = Str::slug($request->job_title).'-'.$request->job_id;
            $edit_data ->job_type = $request->job_type;
            $edit_data ->category =$request->job_position;
            $edit_data ->designation =$request->designation;
            $edit_data ->vacancy =$request->vacancy;
            $edit_data ->experiance =$request->experiance;
            $edit_data ->location =$request->location;
            $edit_data ->salary =$request->salary;
            $edit_data ->description = $request->description;
            $edit_data ->apply_deadline = $request->apply_deadline;
            $edit_data ->edited_by = Auth::user()->id;

            $edit_data ->update();

            return redirect()->route('careers.index') ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_del= career::find($id);
        $post_del ->delete();

        return redirect()->back()->with('delete','Data Deleted Successfully');
    }



    /**
     * status Inactive dunction
     */
    public function statusCheckedInactive($id){

        $status_update=career::find($id);
        $status_update -> status = false;
        $status_update -> edited_by =Auth::user()->id;
        $status_update ->update();
        return redirect()->back();
     }

     public function statusCheckedActive($id){

         $status_update=career::find($id);
         $status_update -> status = true;
         $status_update -> edited_by =Auth::user()->id;
         $status_update ->update();
         return redirect()->back();
     }



    public function jobListViewControl()
    {
        $data = career::orderBy('id', 'DESC')->get();;
        return view('layouts.career.joblist',[
           'all_data' => $data
        ]);

    }











}
