<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Docimage;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function __construct()
    {
      $this->middleware('verified',['except' => ['show_doctor_list']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show_doctor_list(request $request){

     $specialty_id = $request->specialty_id;
     $place = $request->place;
     

     $users = DB::table('users')
            ->where('specialty_id',$specialty_id)
            ->where('address', 'like','%'.$place.'%')
            ->join('docimages','users.id','=','docimages.user_id')
            ->get();


    

    return view ('doctor_list')->with('users',$users);
    }
}
