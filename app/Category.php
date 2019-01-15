<?php

namespace App;
use App\Specialty;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     public function specialty(){
    	return $this->hasMany('App\Specialty');
    }
}
