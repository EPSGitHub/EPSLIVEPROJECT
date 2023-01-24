<?php

namespace App\Http\Controllers;

use App\Models\paymentGateway;
use Illuminate\Http\Request;

class pgRequestController extends Controller
{
    public function index()
    {
        return view('frontend.services.pg_reg');
    }


    public function store(Request $request)
    {
        $rules =[
            'company_name' => 'required',
            'avg_sales' => 'required',
            'contact_person' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company_details' => 'required',
        ];

        $customMessage = [
            'avg_sales.required' => ' Monthly Average Sales required',

        ];


        $this ->validate($request,$rules,$customMessage);





        paymentGateway::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Thank you for your Application. we will contact you shortly.']);
    }
}
