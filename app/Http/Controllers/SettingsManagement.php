<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function settingsAppDownloadView(){

        $st= settings::find(1);
        return view('layouts.settings.appdwn',[
            'sitt' =>$st,
        ]);
    }


    public function socialLinks(){

        $st= settings::find(1);
        return view('layouts.settings.social',[
            'sitt' =>$st,
        ]);
    }




    public function AppDwnMessageUpdate(Request $request){

        $edit_data=settings::find(1);

        $edit_data -> apptxt_en = $request->poptexten;
        $edit_data -> apptxt_bn = $request->poptextbn;
        $edit_data -> ioslink = $request->ioslink;
        $edit_data -> apklink = $request->apklink;

        $unique_bnfile_name='';
        if($request->hasFile('new_bnimage')){
            $img = $request->file('new_bnimage');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/settings/app/'),$unique_bnfile_name);


        }

        else{

            $unique_bnfile_name= $request ->old_bnimage;

        }

        $edit_data ->appimg = $unique_bnfile_name;
        $edit_data ->updated_by =Auth::user()->id;

        $edit_data ->update();
        return redirect()->back()->with('success','data updated successfully');
    }


    public function ContactSetting(){

        $st= settings::find(1);
        return view('layouts.settings.contact',[
            'sitt' =>$st,
        ]);
    }



    public function ContactSettingUpdate(Request $request){

        $edit_data=settings::find(1);

        $edit_data -> contact_en = $request->contacten;
        $edit_data -> contact_bn = $request->contactbn;
        $edit_data -> email = $request->email;
        $edit_data -> address_en = $request->addressen;
        $edit_data -> address_bn = $request->addressbn;
        $edit_data -> Maps = $request->map;
        $edit_data ->updated_by =Auth::user()->id;

        $edit_data ->update();
        return redirect()->back()->with('success','data updated successfully');
    }


    public function socialLinksUpdate(Request $request){
        $edit_data=settings::find(1);

        $social=[
          'facebook' => $request->fb,
          'linkedin' => $request->ln,
          'twitter' => $request->tw,
          'youtube' =>$request->yu,
      ];

      $edit_data-> social= json_encode($social);
      $edit_data ->updated_by =Auth::user()->id;

        $edit_data ->update();
        return redirect()->back() ->with('success','data updated successfully');
      }



      public function BlogSidebarImages(){
        $st= settings::find(1);
        return view('layouts.settings.sidebarimage',[
            'sitt' =>$st,
        ]);

      }

      public function blogSidebarImageaUpdate(Request $request){

        $edit_data=settings::find(1);

        $unique_file_name='';
        if($request->hasFile('new_image')){
            $img = $request->file('new_image');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/settings/blogsidebar/'),$unique_file_name);
            // unlink('media/event/'.$request-> old_image);

        }

        else{

            $unique_file_name= $request ->old_image;

        }

        $unique_bnfile_name='';
        if($request->hasFile('new_bnimage')){
            $img = $request->file('new_bnimage');
            $unique_bnfile_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/settings/blogsidebar/'),$unique_bnfile_name);
            // unlink('media/event/'.$request-> old_image);

        }

        else{

            $unique_bnfile_name= $request ->old_bnimage;

        }

        $edit_data ->blogsidebarimg_en = $unique_file_name;
        $edit_data ->blogsidebarimg_bn = $unique_bnfile_name;

        $edit_data ->updated_by =Auth::user()->id;
        $edit_data ->update();

        return redirect()->back() ->with('success','data updated successfully');

      }







}


