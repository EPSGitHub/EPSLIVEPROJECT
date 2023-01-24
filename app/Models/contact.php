<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class contact extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'message'];

   /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
//
        parent::boot();

        static::created(function ($item) {

            $adminEmail = "support@eps.com.bd";
             \Illuminate\Support\Facades\Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }


}
