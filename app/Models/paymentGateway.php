<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\PaymentGatewayEmail;

class paymentGateway extends Model
{
    use HasFactory;
    public $fillable = ['company_name','avg_sales','contact_person', 'email', 'phone', 'website', 'company_details'];


    public static function boot() {



        parent::boot();



        static::created(function ($item) {


            $adminEmail = "support@eps.com.bd";
            \Illuminate\Support\Facades\Mail::to($adminEmail)->send(new PaymentGatewayEmail($item));

        });

    }
}
