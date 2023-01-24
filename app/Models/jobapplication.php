<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

use App\Mail\jobMail;

class jobapplication extends Model
{
    use HasFactory;


    public $fillable = ['job_title','job_id','job_position','name', 'email', 'phone', 'expected_Salary','status', 'attachment'];


    Public function Careerpos(){
        return $this ->belongsTo('App\Models\career_cat','job_position','id');
    }

    public static function boot() {



        parent::boot();



        static::created(function ($item) {


            $adminEmail = "career@eps.com.bd";
            \Illuminate\Support\Facades\Mail::to($adminEmail)->send(new jobMail($item));

        });

    }
}
