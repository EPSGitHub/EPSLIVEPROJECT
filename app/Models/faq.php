<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;
    protected $guarded=[];

    //Author name Show
    Public function Author(){
        return $this ->belongsTo('App\Models\User','created_by','id');
    }

    Public function faqCat(){
        return $this ->belongsTo('App\Models\faqCategory','category','id');
    }
}
