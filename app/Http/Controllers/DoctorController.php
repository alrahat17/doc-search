<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Specialty;
use App\Doctor;
use Hash;
use App\User;
use App\Appointment;
use App\Schedule;
use Auth;
use DateTime;
use DB;
use App\Docimage;
use App\DocPrice;
use App\EstabAffliation;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$doctors  = User::where('user_type','=','doctor')->get();
        //return view('frontend.doctor_profile');
    }

    public function show_doc_dashboard(){

        if(Auth::check()){
         return view('frontend.doctor_dashboard');   
     }else{
        return redirect ('/login');
     }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citys = City::all();
        $specialtys = Specialty::all();

        return view('frontend.sign_up', compact('citys','specialtys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  


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
       $doctor->user_type = $request->user_type;
       $doctor->save();

        $image = 'doc_img/default.png';

      //Image Upload for doctor
      for($i = 0; $i < 5; $i++)
      {
           $doctor_image = new Docimage();

           $is_main_img = 0;
           if($i == 0){
               $is_main_img = 1;
           }

           $doctor_image->user_id = $doctor->id;
           $doctor_image->image = $image;
           $doctor_image->is_main_img = $is_main_img;
           
           $doctor_image->save();
           //echo $i;
           //echo '<pre>';print_r($doctor_image);
      }

       
        for ($i=0; $i<7 ; $i++) { 
        $data=[

        'doctor_id' => $doctor->id,
        'day_id' => $i,
        'start' => '00:00:00',
        'end' => '00:00:00',
        'duration'=>15,
        ];
        DB::table('schedules')->insert($data);
     }
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
        $citys = City::all();
        $specialtys = Specialty::all();

        $user_id = Auth::user()->id;
        $doctor_galarys = Docimage::where('user_id','=', $user_id)->get();

        $doctor_pricings = DocPrice::where('user_id','=', $user_id)->get();

        $est_afflications = EstabAffliation::where('user_id','=', $user_id)->get();


        return view('frontend.doctor_update', compact('citys','specialtys','doctor_galarys','doctor_pricings','est_afflications'));
        
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
        //
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

    public function doctorProfile()
    {
        $citys = City::all();
        return view('frontend.doctor_profile', compact('citys'));
    }

    public function doctor_update(Request $request, $id)
    {
        return $request;
    }

    


    public function show_schedule_page(){

    $doctor_id = Auth::user()->id;
    $days = ['Monday','Tuesday','Wednesday','ThursDay','Friday','Saturday','Sunday'];
    $schedules = Schedule::where('doctor_id',$doctor_id)->orderBy('day_id','asc')->get();
    //$schedules = Schedule::where('doctor_id',$doctor_id)->get();
   
    
     return view('frontend.doctor_schedule')->with('days',$days)->with('schedules',$schedules);
   
    }



    public function doctor_schedule_update(Request $request,$id){
        

        $doctor_id = Auth::user()->id;
            for ($i=0; $i<7 ; $i++) { 
        $data=[

        'doctor_id' => Auth::user()->id,
        'day_id' => $i,
        'start' => date("G:i:s",strtotime($request->start[$i])),
        'end' => date("G:i:s",strtotime($request->end[$i])),
        'duration'=>$request->duration,
        ];

       
        DB::table('schedules')->where('doctor_id',$doctor_id)->where("day_id",$i)->update($data);
    }

      return view('frontend.doctor_dashboard');

    }


    public function create_appointment(){

        $doctor_id = Auth::user()->id;
        $schedules = Schedule::where('doctor_id',$doctor_id)->get();
        // $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
        $days = array(
                    0 => 'Monday',
                    1 => 'Tuesday',
                    2 => 'Wednesday',
                    3 => 'Thursday',
                    4 => 'Friday',
                    5 => 'Saturday',
                    6 => 'Sunday',
                );
       
        
        $new_array = array();
        $i = 0;
        foreach($schedules as $schedule) {
            $startTime = new DateTime($schedule->start);
            $endTime = new DateTime($schedule->end);
            $duration = 20;
            $another_array = array();
            $new_array[$i]['day'] = $days[$i];
            while ($startTime < $endTime) {
                 $startTime->format('H:i') . ' - ';
                 //echo $startTime->modify('+20 minutes')->format('H:i') . "\n";
                 $another_array[] = $startTime->modify('+20 minutes')->format('H:i');
                 $new_array[$i]['start'] = $another_array;
            }
            // echo '<pre>';
            $i++;
        }
        // echo '<pre>';print_r($new_array);die;


        
        return view('frontend.create_appointment')->with('schedules',$new_array)->with('days',$days);
    }

    public function save_appointment(Request $request){

     echo "<pre>";
     $data = $_POST;

     $doctor_id = Auth::user()->id;

     //$app = new Appointment;

     for($z=0;$z<7;$z++){
     $app = sizeof($data['start'][$z]);
      for($i=0;$i<$app;$i++){
      $x = $data['start'][$z][$i];
      $x = new DateTime($x);
      $fx = $x->format('H:i');
      $y = $data['end'][$z][$i];
      $y = new DateTime($y);
      $fy = $y->format('H:i'); 
      //echo $x; //$z day_id

      $st=[
        'doctor_id'=> $doctor_id,
        'day_id'=>$z,
        'start' => new DateTime($fx),
        'end'=>new DateTime($fy),
        ];

        DB::table('appointments')->insert($st);
        
     }    
     }
      

      echo "<br>";

    
    return 'Success';

           

    }

    public function docpractice(Request $request)
    {
        $docpractice = new Docpractice();

        $docpractice->address_one = $request->address_one;
        $docpractice->address_two = $request->address_two;
        $docpractice->neighborhood = $request->neighborhood;
        $docpractice->instructions = $request->instructions;
        $docpractice->postalcode = $request->postalcode;
        $docpractice->city_id = $request->city_id;
        $docpractice->city_id = $request->city_id;
        $docpractice->phone_portable = $request->phone_portable;
        $docpractice->web_address = $request->web_address;
        $docpractice->exercise = $request->exercise;
        $docpractice->language = $request->language;
        $docpractice->certification = $request->certification;
        $docpractice->prostatement = $request->prostatement;

        $docpractice->save();
        return back()->with('success','Data inserted successfully');
    }


    public function docimageupdate(Request $request, $id){

        $edit_doc_image = Docimage::find($id);
        $image = $request->file('image');

        if (isset($image))
        {
            
            $imagename =time() .'_'.$image->getClientOriginalName();
            $upload_path='doc_img/';
            $imagename = $upload_path.$imagename;  
            if (!file_exists('doc_img'))
            {
                mkdir('doc_img', 0777 , true);
            }
            $image->move('doc_img',$imagename);
        }else {
            $imagename = $edit_doc_image->image;
        }

        $edit_doc_image->image = $request->image;
        $edit_doc_image->image = $imagename;
        $edit_doc_image->save();
        return redirect()->back();
    }


    public function docimagedelete(Request $request, $id)
    {

        $edit_doc_image = Docimage::find($id);
        $edit_doc_image->image = 'default.png';
        $edit_doc_image->save();
        return redirect()->back();
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function procedure(Request $request)
 {  
     
    $doc_price = new DocPrice;
    //$doc_price->id = 3;
    $doc_price->user_id = Auth::user()->id;
    $doc_price->procedure_name = $request->procedure_name;
    $doc_price->fixed_price = $request->fixed_price;
    $doc_price->variable_price = $request->variable_price;
    $doc_price->status = $request->status;
    
   

    $doc_price->save();

   
    //echo json_encode($doc_price);
   
 }

 public function addData(Request $request)
   {
     //print_r($_POST);
     $email = $request->get('email');
     //$password = Hash::make($request->password);
     $password = $request->password;
     $data = DB::table("users")
       ->where('email', $email)
       ->first();

     $pass = $data->password;

     if (Hash::check($password, $pass)) {

        echo 'ok';
        //echo $pass;

     }
     else{
        echo 'wrong';
     }
     
   } 

    public function __construct()
    {
      $this->middleware('auth',['except' => ['create','store','addData']]);
    }

}
