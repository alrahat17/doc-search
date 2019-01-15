@extends('layouts.front_layout')
@section('front_content')
<!-- =======ss body========= -->
        <div class="main_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ss_heading">
                            <h3> Patients <span>Registration</span> </h3> 
                            <p>To make your profile visible on DabaDoc</p>
                        </div>
                    </div>

                    <div class="col-sm-12" id="ss_registration_content">
                        <div class="ss_registration_content_top">
                             
                            <div class="registration_form">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-8">
                                        
                                            <form action="/patients" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                               
                                                <div class="row">
                                                     <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="first_name">* First name</label>
                                                            <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="FirstnameHelp" placeholder="">
                                                        </div>
                                                     </div>
                                                     <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="last_name">* Name</label>
                                                                <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="nameHelp" placeholder="">
                                                            </div>
                                                     </div>
                                               </div>
                                               <div class="row">
                                                    
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">* Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="">
                                                       </div>
                                                    </div>

                                                   
                                                        <input type="hidden" class="form-control" name="user_type" id="user_type" value="patient" placeholder="">
                                                       
                                                    <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="country_id">* Country</label>
                                                                @php
                                                                    $countries = App\Country::all();
                                                                @endphp
                                                                 <select class="form-control" name="country_id">
                                                                    @foreach ($countries as $country)
                                                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                                     @endforeach
                                                                
                                                                 </select>   
                                                            </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password">* Password</label>
                                                            <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="password-confirm">* Confirmation of password</label>
                                                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" aria-describedby="passwordcrfHelp" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                      
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">* Numéro de Téléphone (cabinet)</label>
                                                                <input type="tel"  class="form-control" id="phone">
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                         
                                                    </div>
                                                </div>
                                                
                                                  
                                                    <div class="form-check">
                                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                      <label class="form-check-label" for="exampleCheck1">* You have read and accepted the <a href="#">terms of use</a> </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Valider</button>
                                                  </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <!-- =======ss body end========= -->

     
     
@endsection