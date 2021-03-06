<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function user(){
    	return $this->hasMany('App\User');
    }
}
