<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{	
	
     public function user(){
    	//return $this->belongsTo('App\User','doctor_id');
    	return $this->belongsTo('App\User', 'doctor_id', 'id');
    }
    
}
