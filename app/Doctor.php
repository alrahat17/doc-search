<?php

namespace App;
use App\Appointment;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{	
     public function appointment(){
    	return $this->hasMany('App\Appointment');
    }
    
}
