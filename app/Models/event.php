<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $guarded=[];

    Public function EventCat(){
        return $this ->belongsTo('App\Models\eventCat','event_type_en','id');
    }
}

