<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class City extends Model
{
    protected $fillable = ['name','lat','lng'];



    public function user(){
    	return $this->belongsTo('App\User');
    }
}
