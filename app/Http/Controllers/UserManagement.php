<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use App\Models\UserDepartment;
use App\Models\UserDesignation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserManagement extends Controller
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
        $all_data =user::where('user_role','!=','super admin')->get();
        $all_data_superadmin =user::all();
        return view('layouts.user.index',[
            'all_data' =>$all_data,
            'sadmin'=>$all_data_superadmin,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $User_dept= UserDepartment::all();
        $User_des= UserDesignation::all();
        return view('layouts.user.create',[
            'user_department' => $User_dept,
            'user_designation' => $User_des,

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

            'user_id' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'phone' => ['required','min:11','regex:/(01)[0-9]{9}/'],
            'department' => 'required',
            'designation' => 'required',
            'role' => 'required',
            'password' => ['required', 'string', 'min:8'],
            'conf_password' =>'required',

        ]);

        $access=[
            'user' => '0',
            'blog' => '0',
            'career' => '0',
            'press_release' => '0',
            'faq' => '0',
            'event' => '0',
            'media' => '0',
            'settings' => '0',
            'subscription' => '0',
            'page_control' => '0',
            'support' => '0',
            'offer' => '0',


        ];

        $sub_access = [

            'user_create' =>'0',
            'user_department' =>'0',
            'user_designation' =>'0',
            'user_role' =>'0',
            'career_post' =>'0',
            'job_position' =>'0',
            'job_prefix' =>'0',
            'job_application' =>'0',
            'blog_view' =>'0',
            'blog_create' =>'0',
            'blog_category' =>'0',
            'blog_tag' =>'0',
            'blog_manage' =>'0',
            'faq_create' =>'0',
            'faq_manage' =>'0',
            'faq_category' =>'0',
            'event_view' =>'0',
            'event_category' =>'0',
            'event_create' =>'0',
            'event_manage' =>'0',
            'press_view' =>'0',
            'press_category' =>'0',
            'press_create' =>'0',
            'press_manage' =>'0',
            'offer_view' =>'0',
            'offer_category' =>'0',
            'offer_create' =>'0',
            'offer_manage' =>'0',


        ];


        if($request->password == $request->conf_password )
        {
            $user= user::create([

                'name' => $request->name,
                'email' => $request->email,
                'phone' =>$request->phone,
                'user_id' =>$request->user_id,
                'department' =>$request->department,
                'designation' =>$request->designation,
                'user_role'=>$request->role,
                'password' =>bcrypt($request->password),
                'access' =>json_encode($access),
                'sub_access' =>json_encode($sub_access),
                'created_by'=>Auth::user()->id,

            ]);



            return redirect()->route('userAccessControl.edit',$user->id) ->with('success','User Create successfully');
        }


        else{
            return redirect()->route('user.create') ->with('warning','Password Not Matched');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $did =Crypt::decrypt($id);

        $user_data =user::find($did);
        return view('layouts.user.user_profile',compact('user_data'));


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
        $c= User::find($did);
        $user_dept=UserDepartment::all();
        $user_des=UserDesignation::all();
        return view('layouts.user.update',[
            'user'=> $c,
            'user_dep' =>$user_dept,
            'user_des' =>$user_des,

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

            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => ['required','min:11','regex:/(01)[0-9]{9}/'],
            'department' => 'required',
            'designation' => 'required',
            'role' => 'required',

        ]);

        $edit_id = $id;
        $edit_data=User::find($edit_id);
        $edit_data -> user_id = $request->user_id;
        $edit_data -> name = $request->name;
        $edit_data -> email= $request->email;
        $edit_data -> phone= $request->phone;
        $edit_data -> department= $request->department;
        $edit_data -> designation= $request->designation;
        $edit_data -> address= $request->address;
        $unique_file_name='';
        if($request->hasFile('new_image')){
            $img = $request->file('new_image');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('admin/assets/img/profiles'),$unique_file_name);

        }

        else{

            $unique_file_name= $request ->old_image;

        }
        $edit_data ->image = $unique_file_name;
        $edit_data -> user_role= $request->role;
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
        $user_del= user::find($id);
        $user_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
