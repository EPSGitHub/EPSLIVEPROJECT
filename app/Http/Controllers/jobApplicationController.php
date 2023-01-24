<?php

namespace App\Http\Controllers;

use App\Models\career;
use Illuminate\Http\Request;
use App\Models\jobapplication;

class jobApplicationController extends Controller
{

    public function index(career $cid)
    {

        return view('frontend.jobapply',[
            'careers' => $cid,
        ]);

    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'expected_Salary' => 'required',
            'attachment' => 'required|mimes:pdf|max:2048'
        ]);

        $unique_file_name='';
        if($request->hasFile('attachment')){
            $doc = $request->file('attachment');
            $unique_file_name=md5(rand().time()). '.' . $doc ->getClientOriginalExtension();
            $doc -> move(public_path('media/resume/'),$unique_file_name);
        }

        else{
            $unique_file_name='asusual';
        }

        jobapplication::create([
            "job_title" => $request->job_title,
            "job_id" => $request->job_id,
            "job_position" => $request->job_position,
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "expected_Salary" => $request->expected_Salary,
            "status" => $request->status,
            "attachment" => $unique_file_name
        ]);

        return redirect()->back()
                         ->with(['success' => 'Thank your Application. we will contact you shortly.']);
    }










}
