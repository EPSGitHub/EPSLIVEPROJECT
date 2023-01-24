<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UserAccessController extends Controller
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
        //
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
        $c= User::find($id);
        return view('layouts.user.access',[
            'user'=> $c,

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
        $edit_data=User::find($edit_id);

        $access=[
            'user' =>$request->user,
            'blog' =>$request->blog,
            'career' =>$request->career,
            'press_release' =>$request->press_release,
            'faq' =>$request->faq,
            'event' => $request->event,
            'media' => '0',
            'settings' => $request->settings,
            'subscription' => '0',
            'page_control' => '0',
            'support' => '0',
            'offer' => '0',


        ];


        $sub_access = [

            'user_create' =>$request->user_create,
            'user_department' =>$request->user_dept,
            'user_designation' =>$request->user_des,
            'user_role' =>$request->user_access,
            'career_post' =>$request->career_post,
            'job_position' =>$request->job_position,
            'job_prefix' =>$request->job_prefix,
            'job_application' =>$request->job_application,
            'event_view' =>$request->event_view,
            'event_category' =>$request->event_category,
            'event_create' =>$request->event_create,
            'event_manage' =>$request->event_manage,
            'blog_view' =>$request->blog_view,
            'blog_create' =>$request->blog_create,
            'blog_category' =>$request->blog_category,
            'blog_tag' =>$request->blog_tag,
            'blog_manage' =>$request->blog_manage,
            'faq_create' =>$request->faq_create,
            'faq_manage' =>$request->faq_manage,
            'faq_category' =>$request->faq_category,
            'press_view' =>$request->press_view,
            'press_category' =>$request->press_category,
            'press_create' =>$request->press_create,
            'press_manage' =>$request->press_manage,
            'offer_view' =>'0',
            'offer_category' =>'0',
            'offer_create' =>'0',
            'offer_manage' =>'0',


        ];





        $edit_data-> access= json_encode($access);
        $edit_data-> sub_access= json_encode($sub_access);
        $edit_data ->update();


        return redirect()->back() ->with('success','Access Updated successfully');
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
