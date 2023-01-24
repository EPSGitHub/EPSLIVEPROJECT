<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pressrelease extends Model
{
    use HasFactory;
    protected $guarded=[];

    Public function Author(){
        return $this ->belongsTo('App\Models\User','posted_by','id');
    }

    Public function postCat(){
        return $this ->belongsTo('App\Models\pressCategory','category','id');
    }

}
