@extends('layouts.logged_in_patient_layout')
@section('patient_content')
<!-- =======ss body========= -->
        <div class="main_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ss_heading">
                           
                        </div>
                    </div>

                    <div class="col-sm-12" id="ss_registration_content">
                        <div class="ss_registration_content_top">
                             
                            <div class="registration_form">
                                <div class="row justify-content-md-center">
                                    <div class="col-sm-8">
                                         <div class="message_box">
                                             <div class="row">
                                                <div class="col-sm-4" id="message_left">
                                                    <form class="form-inline inline-search">
                                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                                        <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                    </form>
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <div class="themble"><img src="assets/img/d1.jpg"  /> </div> <span> Dr Ali Mchachti</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                                <a href="#">
                                                                    <div class="themble"><img src="assets/img/d2.jpg"  /> </div> <span> Dr Ali Mchachti</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                    <a href="#">
                                                                        <div class="themble"><img src="assets/img/d3.jpg"  /> </div> <span> Dr Ali Mchachti</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#">
                                                                            <div class="themble"><img src="assets/img/d4.jpg"  /> </div> <span> Dr Ali Mchachti</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                            <a href="#">
                                                                                <div class="themble"><img src="assets/img/d5.jpg"  /> </div> <span> Dr Ali Mchachti</span>
                                                                            </a>
                                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="message_right">
                                                            <h4 class="titlee">Dr Ali Mchachti</h4>
                                                            <div class="message_content_box">
                                                                 dsf
                                                            </div>
                                                            <div class="send-box">
                                                            <input class="form-control"  placeholder="Votre message" type="text">
                                                            <button><i class="fa fa-paper-plane"></i></button>
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
        </div>
     <!-- =======ss body end========= -->
@endsection