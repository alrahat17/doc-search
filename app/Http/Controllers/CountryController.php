<?php

namespace App\Http\Controllers;
use App\Country;
use App\City;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('admins.countries.index')->with('countries',$countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new Country;
        $country->country_name = $request->country_name;
        $country->save();
        return redirect('/countries');
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
        $country = Country::find($id);
        return view('admins.countries.edit')->with('country',$country);
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
        $country = Country::find($id);
        $country->country_name = $request->country_name;
        $country->update();
        return redirect('/countries');
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

    public function active_country(Request $request,$id){

        $country = Country::find($id);
        $country->where('id',$id)->update(['status'=>1]);
        return redirect('countries');


    }

     public function deactive_country(Request $request,$id){

        $country = Country::find($id);
        $country->where('id',$id)->update(['status'=>0]);
        return redirect('countries');


    }

    public function add_city(){

        return view('admins.cities.create');
    }

    public function edit_city($id){

        $city = City::find($id);

        return view('admins.cities.edit')->with('city',$city);
    }

    public function save_city(Request $request){

        $city = new City;
        $city->city = $request->city;
        $city->save();

        return redirect('all_city');

    }

    public function update_city(Request $request, $id){

        $city = City::find($id);
        $city->city = $request->city;
        $city->update();

        return redirect('all_city');



    }

    public function all_city(){

        $cities = City::all();

        return view('admins.cities.index')->with('cities',$cities);
    }

    public function active_city(Request $request,$id){

        $city = City::find($id);
        $city->where('id',$id)->update(['status'=>1]);
        return redirect('all_city');


    }

     public function deactive_city(Request $request,$id){

        $city = City::find($id);
        $city->where('id',$id)->update(['status'=>0]);
        return redirect('all_city');


    }
}
