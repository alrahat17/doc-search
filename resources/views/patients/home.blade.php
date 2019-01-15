@extends('layouts.logged_in_patient_layout')
@section('patient_content')
     <!-- =======ss body========= -->
        <div class="main_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ss_heading">
                            <h3> My  <span>appointments</span> </h3>  
                        </div>
                    </div>

                    <div class="col-sm-12" id="ss_registration_content">
                        <div class="ss_registration_content_top">
                             
                            <div class="registration_form">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-10">
                                         <div class="row">
                                          @foreach($appointments as $appointment)
                                             <div class="col-sm-4">
                                                    <div class="card ss_my_appoinment">
                                                        <div class="ss_my_appoinment_top">
                                                            <h3>{{$appointment->user->first_name}}</h3>
                                                            <p>{{$appointment->user->specialty->spcl_name}}</p>
                                                            <div class="card-img-top">
                                                            <img  src="{{URL::to('public/doc_front/assets/img/d1.jpg')}}" alt="Card image cap">
                                                           </div>
                                                        </div>

                                                        @php
                                                        $date_new = Carbon\Carbon::parse($appointment->app_date);
                                                        $app_date = $date_new->toFormattedDateString(); 
                                                        @endphp
                                                      
                                                        <div class="card-body">
                                                            <h4>{{$app_date}}</h4>

                                                            <p>09:00 - 09:15</p>
                                                           <h5>Waiting for confirmation by the doctor</h5> 
                                                           <a href="patients_messages.html" class="btn  btn-outline-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send a message</a>
                                                           <a href="#" class="btn  btn-danger">Cancel</a>
                                                        </div>
                                                </div>
                                             </div>

                                             @endforeach
                                                
                                         </div>
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
    