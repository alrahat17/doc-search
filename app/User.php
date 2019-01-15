<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Appointment;
use App\Specialty;
use App\City;
use App\Docimage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email','user_type','specialty_id','phone_no','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country(){
        return $this->belongsTo('App\Country');
    }
     public function appointment(){
        return $this->hasMany('App\Appointment');
    }

     public function specialty(){
        return $this->belongsTo('App\Specialty');
     }

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function docimage(){
        return $this->hasMany('App\Docimage');
    }
}
