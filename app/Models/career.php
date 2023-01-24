<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function resolveRouteBinding($value, $field = 'slug')
    {
        // Perform the logic to find the given slug in the database...
        return $this->where($field ?? $this->getRouteKeyName().'->'.app()->getLocale(), $value)->firstOrFail();
    }

    //Author name Show
    Public function Author(){
        return $this ->belongsTo('App\Models\User','posted_by','id');
    }
    Public function Editor(){
        return $this ->belongsTo('App\Models\User','edited_by','id');
    }

    Public function CareerDep(){
        return $this ->belongsTo('App\Models\career_cat','category','id');
    }
    Public function CareerDes(){
        return $this ->belongsTo('App\Models\jobDesignation','designation','id');
    }









}
