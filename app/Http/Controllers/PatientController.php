<?php

namespace App\Http\Controllers;
use App\Country;
use App\User;
use App\Appointment;
use Illuminate\Http\Request;
use Hash;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $patient_id = Auth::user()->id;
        $appointments = Appointment::where('patient_id',$patient_id)->get();
        return view('patients.home')->with('appointments',$appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $countries = Country::all();
        return view('patients.create')->with('countries',$countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
          $this->validate($request,[

            'first_name'=>'required|max:255|string|min:3',
            'last_name'=>'required|max:255|string|min:3',
            'email'=>'required|max:255|email|unique:users',
            'country_id'=>'required',
            'password' => 'required|string|min:6|confirmed',
        ]);



        $patient = new User;
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->email = $request->email;
        $patient->user_type = $request->user_type;
        $patient->country_id = $request->country_id;
        $patient->phone_no = $request->phone_no;
        $patient->password = Hash::make($request->password);
        $patient->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient_id = Auth::id();
        $countries = Country::all();
        
      $user =User::find($patient_id);
      
      return view('patients.edit')->with('user',$user)->with('countries',$countries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
       $user=User::find($id);

       $user->first_name = $request->first_name;
       $user->last_name = $request->last_name;
       $user->email = $request->email;
       $user->country_id = $request->country_id;
       $user->phone_no = $request->phone_no;
       $user->password = Hash::make($request->password);

       

       $user->update();

     

       return redirect::to('/patients');

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function update_profile(Request $request, $id){

       $patient=User::find($id);
       $patient->first_name = $request->first_name;
       $patient->last_name = $request->last_name;
       $patient->email = $request->email;
       $patient->country_id = $request->country_id;
       $patient->phone_no = $request->phone_no;
       $patient->password = Hash::make($request->password);

    

      $patient->update();


     
      return redirect::to('/patients');

  }

  public function show_patients_message(){

    return view('patients.patients_messages');
  }

  // public function __construct()
  //   {
  //       $this->middleware('auth');
  //   }

  public function __construct()
    {
      $this->middleware('verified',['except' => ['create']]);
    }

    
}
