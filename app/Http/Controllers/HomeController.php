<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Docimage;
use DB;
use App\City;
use App\Specialty;
use App\Doctor;
use Hash;
use App\Schedule;
use Auth;
use DateTime;
use App\DocPrice;
use App\Docpractice;
use App\EstabAffliation;
use App\Appointment;

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
      $this->middleware('verified',['except' => ['show_doctor_list','show_welcome_page','fetch','fetch_search','doctor_view','show_appointment']]);
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

    public function show_welcome_page(){

        return view('welcome');
    }

    public function fetch(request $request){

        if($request->get('query')){

            $query = $request->get('query');
            $data = DB::table('users')->where('first_name','LIKE','%'.$query.'%')->get();
           
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;color:red;">';

            foreach ($data as $row) {
             
             $output .= '<li><a href="#">'.$row->first_name.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
        else{
            echo 'Data not found';

        }
    }

    

    public function show_doctor_list(request $request){


     echo "<pre>";
     print_r($_POST);
     die;

     $specialty_id = $request->specialty_id;
     $place = $request->place;
     $search = $request->search;
     

     // $users = DB::table('users')
     //        ->where('specialty_id',$specialty_id)
     //        ->where('address', 'like','%'.$place.'%')
     //        ->orWhere('first_name','like','%'.$search.'%')
     //        ->join('docimages','users.id','=','docimages.user_id')
     //        ->get();

       $users= User::where('specialty_id',$specialty_id)
                   ->where('user_type','doctor')
                    ->where('address', 'like','%'.$place.'%')
                    ->where('first_name','like','%'.$search.'%')
                    ->join('docimages', function ($join) {
                        $join->on('users.id', '=', 'docimages.user_id')
                    ->where('docimages.is_main_img', '=', 1);
                    })
                   ->get();

        // echo "<pre>";
        // print_r($users); 
        // die;


    

    return view ('doctor_list')->with('users',$users);
    }


    

    public function doctor_view($id)
    { 

        $doctor = User::find($id);
        if($doctor && $doctor->user_type=='doctor'){
         $doctor_galarys = Docimage::where('user_id','=', $id)
                    ->where('is_main_img','=','1')->get();
        $doc_image = json_decode($doctor_galarys);
        $doc_practice = Docpractice::where('user_id','=', $id)->get();
        $doc_prac= json_decode($doc_practice);
        return view('doctor_details',compact('doctor','doc_image','doc_prac'));

        }
        else{

        return abort(404);
        }


       
    }


    public function show_appointment(){

        $appointments = Appointment::all();

        return view('show_appointment')->with('appointments',$appointments);
    }


}
