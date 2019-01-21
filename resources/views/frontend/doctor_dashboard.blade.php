@extends('layouts.front_layout')
@section('front_content')

<!-- =======ss body========= -->
        <div class="main_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ss_heading">
                            <h3>Hello,  <span>{{Auth::user()->title}} {{Auth::user()->first_name}} {{Auth::user()->last_name}}</span> </h3> 
                            <p>Complete your profile, it is only 23% complete</p> 
                            <p>Your DabaDoc account is still not visible to patients on the appointment platform <a href="#">How to proceed ?</a> </p>
                             
                        </div>
                    </div>

                    <div class="col-sm-12" id="ss_registration_content">
                        <div class="ss_registration_content_top">
                             
                            <div class="doctor_profile">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-4">
                                        <div class="left_memu">
                                            <ul> 
                                                <li><a href="calendar.html"><i class="fa fa-calendar"></i> Diary</a></li>
                                                <li><a href="{{URL::to('doctor_schedule')}}"><i class="fa fa-hourglass"></i> Schedules</a></li>
                                                <li><a href="{{URL::to('create_appointment')}}"><i class="fa fa-list"></i> List of appointments</a></li>
                                                <li><a href="doctor_prescriptions.html"><i class="fa fa-file-text-o"></i> Ordinances</a></li>
                                                <li><a href="doctor_message.html"><i class="fa fa-comments-o"></i> Posts</a></li>
                                                <li><a href="#"><i class="fa fa-inbox"></i> SMS sent</a></li>
                                                <li><a href="#"><i class="fa fa-paper-plane"></i> Mass SMS</a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o"></i> Comments</a></li>
                                                <li><a href="#"><i class="fa fa-bar-chart"></i> Statistics</a></li>
                                                <li><a href="doctor_settings.html"><i class="fa fa-cogs"></i> Settings</a></li>
                                   
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="doctor_main_box">
                                                <div class="card">
                                                    <div class="card-header">
                                                            Last 60 days statistics
                                                    </div>
                                                    <div class="card-body">
                                                            <div class="alert alert-info">
                                                                <strong>Access</strong>  available only once your account is confirmed.
                                                            </div>
                                                    </div>
                                                </div> 
                                                <div class="card">
                                                    <div class="card-header">
                                                            My appointments
                                                    </div>
                                                    <div class="card-body">
                                                            <div class="alert alert-info">
                                                                <strong>Access</strong>  available only once your account is confirmed.
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                            SMS sent
                                                    </div>
                                                    <div class="card-body">
                                                            <div class="alert alert-info">
                                                                <strong>Access</strong>  available only once your account is confirmed.
                                                            </div>
                                                    </div>
                                                </div>     
                                            
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