<?php

namespace App;
use App\Schedule;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function schedule(){
    	return $this->hasMany('App\Schedule');
    }
}
