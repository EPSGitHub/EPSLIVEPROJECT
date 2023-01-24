<?php

namespace App\Http\Controllers;
use App\Models\subscribe;
use Exception;
use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;


class subscribeController extends Controller
{
    //




    public function subscribe(Request $request)
    {

       /*  $request->validate([
            'email' => 'required|email',
        ]); */





        try {
            //code...
            if($request->get('email')){
                $email = $request->get('email');
                $data = subscribe::where('email',$email) ->count();

                if($data>0){
                    return 'not_unique';
                }

                else{

                    Newsletter::subscribe($request->email);
                    subscribe::create($request->all());
                    return 'unique';
                }


            }
            else{



                        return redirect()->back()
                         ->with(['success' => 'Thanks for your Subscription']);

            }
        } catch (\Exception $e) {
            return redirect()->back()
            ->with(['error' =>$e->getMessage() ]);
        }

    }
}
