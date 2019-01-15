<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;
use App\Category;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $specialties = Specialty::all();
     return view('admins.specialties.index')->with('specialties',$specialties);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     $categories = Category::all();
     return view('admins.specialties.create')->with('categories',$categories);
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

        'spcl_name'=>'required|string|max:255',
        'spcl_des'=>'required|max:1000',
        'category_id' => 'required',
        ]);
        
        $specialty = new Specialty;
        $specialty->spcl_name = $request->spcl_name;
        $specialty->spcl_des = $request->spcl_des;
        $specialty->category_id = $request->category_id;
        $specialty->save();
        return redirect('/specialties');
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
        $categories = Category::all();
        $specialty = Specialty::find($id);
        return view('admins.specialties.edit')->with('specialty',$specialty)->with('categories',$categories);
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
        $specialty = Specialty::find($id);
        $specialty->spcl_name = $request->spcl_name;
        $specialty->spcl_des = $request->spcl_des;
        $specialty->category_id = $request->category_id;
        $specialty->update();
        return redirect('/specialties');
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

    public function active_specialty(Request $request,$id){

        $specialty = Specialty::find($id);
        $specialty->where('id',$id)->update(['status'=>1]);
        return redirect('specialties');


    }

     public function deactive_category(Request $request,$id){

        $specialty = Specialty::find($id);
        $specialty->where('id',$id)->update(['status'=>0]);
        return redirect('specialties');


    }
}
