<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Patient;
use App\Appointment;
use App\User;
use App\City;
use App\Specialty;
use Hash;
use DB;
use Illuminate\Support\Facades\Redirect;
use yajra\Datatables\Datatables;
use App\HTTP\Requests;
use App\Doctor;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

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

    public function add_patient(){

    $countries = Country::all();

    return view('admins.patients.create')->with('countries',$countries);
    }

    public function save_patient(Request $request){

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

    return redirect('all_patient');
    
    }

    public function all_patient(){

    
    return view('admins.patients.index');
    }

    public function all_appointment(){

    $appointments = Appointment::all();
    return view('admins.appointments.index')->with('appointments',$appointments);
    }


    public function edit_patient($id){

    $user = User::find($id);
    $countries = Country::all();
    return view('admins.patients.edit')->with('user',$user)->with('countries',$countries);

    }

    public function update_patient(Request $request, $id){



    $patient = User::find($id);
    $patient->first_name = $request->first_name;
    $patient->last_name = $request->last_name;
    $patient->email = $request->email;
    $patient->country_id = $request->country_id;
    $patient->phone_no = $request->phone_no;
    $patient->password = Hash::make($request->password);
    $patient->update();

    return redirect('/all_patient');


    }

    public function delete_patient($id){

     DB::table('users')
        ->where('id',$id)
        ->delete();
        
        //unlink($user->photo);
        //alert()->success('Success', 'User Deleted Successfully.');
        return redirect('all_patient');
    }

    public function active_patient(Request $request,$id){

        $patient = User::find($id);
        $patient->where('id',$id)->update(['status'=>1]);
        return redirect('all_patient');


    }

     public function deactive_patient(Request $request,$id){

        $patient = User::find($id);
        $patient->where('id',$id)->update(['status'=>0]);
        return redirect('all_patient');


    }

    public function getPatients(){

    
        $patients = User::where('user_type','patient')->get();

        foreach ($patients as $patient) {
           
         return Datatables::of($patients)
         
         ->addColumn('country_id',function ($patient) {

            $country = $patient->country->country_name;
           
           
            return $country;
            })
        
         ->addColumn('status', function ($patient) {
            if($patient->status == 1){
                return 'Active';
                
            
            } else {
                return 'Inactive';
            }
            

        })
        ->addColumn('action', function ($patient) {
            if($patient->status == 1){
            return '
            
               
                <a href="/deactive_patient/'.$patient->id.'" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> </a>              
                <a href="/edit_patient/'.$patient->id.'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                <a href="/delete_patient/'.$patient->id.'" class="btn btn-danger btn-sm"  onclick="return confirm("Are you sure to delete?")"><i class="fa fa-trash"></i></a>';
            }
            else{

                return '
                    <a href="/active_patient/'.$patient->id.'" class="btn btn-success btn-sm"><i class="fa fa-check"></i> </a>                  
                    <a href="/edit_patient/'.$patient->id.'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                    <a href="/delete_patient/'.$patient->id.'" class="btn btn-danger btn-sm"  onclick="return confirm("Are you sure to delete?")"><i class="fa fa-trash"></i></a>';

            }

        })
        


        //->editColumn('id', 'ID: {{$id}}')        
        ->make(true);
        }




    }

    
    public function getAppointments(){


       $appointments = Appointment::all();
       foreach ($appointments as $appointment) {
        
        return Datatables::of($appointments)

        
        ->editColumn('doctor_id',function ($appointment) {

            $doc_name = $appointment->user->first_name;

            return $doc_name;
            })
         
        ->make(true);
       }


        
      

        
    }
    

    



    public function add_appointment(){

    return view('admins.appointments.create');
    }

    public function show_contact_page(){

    return view('contact');
    }

    /*Doctor create*/
    public function adddoctor()
    {
        $citys = City::all();
        $specialtys = Specialty::all();
        return view('admins.doctor.create',compact('specialtys','citys'));
    }

    public function savedoctor(Request $request)
    {
        // $this->validate($request, [
        //     '' => 'required',
        // ]);

       $doctor = new User();
       $doctor->title = $request->title;
       $doctor->first_name = $request->first_name;
       $doctor->last_name = $request->last_name;
       $doctor->email = $request->email;
       $doctor->password = Hash::make($request->password);
       $doctor->specialty_id = $request->specialty_id;
       $doctor->city_id = $request->city_id;
       $doctor->address = $request->address;
       $doctor->phone_no = $request->phone_no;
       $doctor->phone_portable = $request->phone_portable;
       $doctor->status = $request->status;
       $doctor->user_type = $request->user_type;
       $doctor->save();
       return redirect('/all_doctor');
    }






    public function all_doctor()
    {
       //$doctors  = User::where('user_type','=','doctor')->get(); 
       return view('admins.doctor.index');
    }

    public function getDoctors()
    {
        //$doctors = User::select(['id','title','first_name','last_name', 'email','city_id','address','phone_no','phone_portable','status'])->where('user_type','=','doctor');
        $doctors = User::where('user_type','=','doctor')->get();

        return Datatables::of($doctors)

         ->addColumn('name', function ($user) {
            return $user->title.' '.$user->first_name.' '.$user->last_name;
        })

          ->addColumn('city_id',function ($user) {

            $city = $user->city->city;
           
           
            return $city;
            })

         ->addColumn('specialty_id',function ($user) {

            $specialty = $user->specialty->spcl_name;
           
           
            return $specialty;
            })

         ->addColumn('status', function ($patient) {
            if($patient->status == 1){
                return 'Active';
                
            
            } else {
                return 'Inactive';
            }
            

        })

        ->addColumn('action', function ($user) {

         if($user->status==1){
            return '
            <a href="/deactive_doctor/'.$user->id.'" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> </a>
            <a href="edit_doctor/'.$user->id.'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
            <a href="/delete_doctor/'.$user->id.'" class="btn btn-danger btn-sm"  onclick="return confirm("Are you sure to delete?")"><i class="fa fa-trash"></i></a>';

        }else{

             return '
            <a href="/active_doctor/'.$user->id.'" class="btn btn-success btn-sm"><i class="fa fa-check"></i> </a>
            <a href="edit_doctor/'.$user->id.'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
            <a href="/delete_doctor/'.$user->id.'" class="btn btn-danger btn-sm"  onclick="return confirm("Are you sure to delete?")"><i class="fa fa-trash"></i></a>';
        }

        }) 


        ->make(true);
    }



    public function edit_doctor($id)
    {
        $citys = City::all();
        $specialtys = Specialty::all();
        $user = User::find($id);

        return view ('admins.doctor.edit', compact('citys','specialtys','user'));
    }

    public function update_doctor(Request $request, $id){

       $doctor = User::find($id);
       $doctor->title = $request->title;
       $doctor->first_name = $request->first_name;
       $doctor->last_name = $request->last_name;
       $doctor->email = $request->email;
       $doctor->password = Hash::make($request->password);
       $doctor->specialty_id = $request->specialty_id;
       $doctor->city_id = $request->city_id;
       $doctor->address = $request->address;
       $doctor->phone_no = $request->phone_no;
       $doctor->phone_portable = $request->phone_portable;
       $doctor->status = $request->status;
       $doctor->user_type = $request->user_type;
       $doctor->update();
        return redirect('/all_doctor');
    }

    public function delete_doctor($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    public function active_doctor(Request $request,$id){

        $doctor = User::find($id);
        $doctor->where('id',$id)->update(['status'=>1]);
        return redirect('all_doctor');


    }

     public function deactive_doctor(Request $request,$id){

        $doctor = User::find($id);
        $doctor->where('id',$id)->update(['status'=>0]);
        return redirect('all_doctor');


    }

    


     public function searchGirls(Request $request)
   {
       $lat = $request->lat;
       $lng = $request->lng;

       $girls = City::whereBetween('lat',[$lat-0.1,$lat+0.1])->whereBetween('lng',[$lng-0.1,$lng+0.1])->get();
       return $girls;
   }

   public function __construct()
    {
        $this->middleware('auth');
    }

}
