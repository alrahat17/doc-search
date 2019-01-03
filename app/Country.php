<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Country extends Model
{
    public function patient(){
    	return $this->hasMany('App\Patient');
    }
}
