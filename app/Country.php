<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Country extends Model
{
    public function user(){
    	return $this->hasMany('App\User');
    }
}
