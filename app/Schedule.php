<?php

namespace App;
use App\Day;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function day(){
    	return $this->belongsTo('App\Day');
    }
}
