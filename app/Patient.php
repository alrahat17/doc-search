<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class Patient extends Model
{
    public function country(){
    	return $this->belongsTo('App\Country');
    }
}
