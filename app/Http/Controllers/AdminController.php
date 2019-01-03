<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Patient;
use Hash;
use DB;
use Illuminate\Support\Facades\Redirect;
use yajra\Datatables\Datatables;
use App\HTTP\Requests;

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

    public function add_patient(){

    $countries = Country::all();

    return view('admins.patients.create')->with('countries',$countries);
    }

    public function save_patient(Request $request){

    $patient = new Patient;
    $patient->first_name = $request->first_name;
    $patient->family_name = $request->family_name;
    $patient->email = $request->email;
    $patient->country_id = $request->country_id;
    $patient->phone_no = $request->phone_no;
    $patient->password = Hash::make($request->password);
    $patient->save();

    return redirect('all_patient');
    
    }

    public function all_patient(){

    $patients = Patient::all();
    return view('admins.patients.index')->with('patients',$patients);
    }

    public function edit_patient($id){

    $patient = Patient::find($id);
    $countries = Country::all();
    return view('admins.patients.edit')->with('patient',$patient)->with('countries',$countries);

    }

    public function update_patient(Request $request, $id){

    $patient = Patient::find($id);
    $patient->first_name = $request->first_name;
    $patient->family_name = $request->family_name;
    $patient->email = $request->email;
    $patient->country_id = $request->country_id;
    $patient->phone_no = $request->phone_no;
    $patient->password = Hash::make($request->password);
    $patient->update();

    return redirect('all_patient');


    }

    public function delete_patient($id){

     DB::table('patients')
        ->where('id',$id)
        ->delete();
        
        //unlink($user->photo);
        //alert()->success('Success', 'User Deleted Successfully.');
        return redirect('all_patient');
    }

    public function active_patient(Request $request,$id){

        $patient = Patient::find($id);
        $patient->where('id',$id)->update(['status'=>1]);
        return redirect('all_patient');


    }

     public function deactive_patient(Request $request,$id){

        $patient = Patient::find($id);
        $patient->where('id',$id)->update(['status'=>0]);
        return redirect('all_patient');


    }

    public function getPatients(){

        $patients = Patient::select(['id','first_name','family_name', 'email', 'phone_no','status']);
         
        

        return Datatables::of($patients)

        ->addColumn('action', function ($patient) {
            return '<a href="/edit_patient/'.$patient->id.'" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a><a href="/delete_patient/'.$patient->id.'" class="btn btn-danger btn-sm"  onclick="return confirm("Are you sure to delete?")"><i class="fa fa-trash"></i></a>';

        })
        


        //->editColumn('id', 'ID: {{$id}}')        
        ->make(true);
    }
}
