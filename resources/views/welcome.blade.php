@extends('layouts.front_layout')
@section('front_content')
<!-- =======ss body========= -->
<style>
#autocomplete {
  width: 100%;
}
</style>



<section id="banner">
 <div class="banner_img"> <img src="{{URL::to('doc_front/assets/img/banner1.png')}}" class="img-fluid"> </div>
 <div class="banner_content">
   <div class="container">
     <div class="row justify-content-md-center">
       <div class="col-md-9">
        <h3>Find your doctor and make an appointment in one click!</h3>
        <form method="post" action="{{url('doctor_list')}}">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <input type="text" class="form-control" placeholder="Type Keyword...">

                                          {{-- <select class="js-example-basic-single  form-control" name="state">
                                                <option data-subtext="Rep California"> Algologue - Traitement de la douleur </option>
                                                <option data-subtext="Sen California">Bill Gordon</option>
                                                <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
                                                <option data-subtext="Rep Alabama">Mario Flores</option>
                                                <option data-subtext="Rep Alaska">Don Young</option>
                                                <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
                                              </select> --}}

                                              @php

                                              $specialties = App\Specialty::where('status',1)->get();

                                              @endphp

                                              <select class="js-example-basic-single  form-control" name="specialty_id">

                                               @foreach($specialties as $specialty)

                                               <option data-subtext="Rep California" value="{{$specialty->id}}"> {{$specialty->spcl_name}}</option>



                                               @endforeach
                                             </select>


                                             <input type="text" name="place" id="autocomplete"  placeholder="Or ? (neighborhood, city ...)">


                                           </div>

                                           <button type="submit" class="btn btn-primary">Search</button>
                                         </div>
                                       </form>

                                       {{--   <div id="locationField"> --}}
                                {{-- <input id="autocomplete" placeholder="Enter your address" type="" />
                              </div> --}}

                              <div class="ss_button_banner">
                                <a href="#" class=" btn btn-outline-light"> Consult online</a>
                                <a href="#" class=" btn btn-light"> Are you a practitioner? </a>
                              </div>
                            </div> 
                          </div> 
                        </div>
                      </div>
                    </section>
                    <section class="ss_top_doctor">
            <div class="container">
               <div class="ss_heading">
                   <h3>Our top <span>Doctor</span> </h3>
                   <p>Doctor, are you at the forefront of technology?</p>
               </div>

               <div class="ss_to_doctor_item_list">

                @php
                  //$users = App\User::where('user_type','doctor')->get();

                  $users = DB::table('users')
                ->join('docimages','users.id','=','docimages.user_id')
                ->limit(4)
                ->get();

                @endphp
                @foreach($users as $user)
                <div class="ss_to_doctor_item">
                        <div class="top_s_img">
                             <a href="#"> <img src="{{URL::to($user->image)}}" class="img-fluid"/> </a> 
                             <a class="doc-featuredicon" href="javascript:;"><i class="fa fa-bolt"></i>featured</a>
                             <a class="doc-featuredicon doc-verfiedicon" href="javascript:;"><i class="fa fa-shield"></i>Verified</a>
                             <span class="doc-stars"><span style="width:80%"></span></span>
                        </div>
                        <h3> <a href="#"> Dr. {{$user->first_name}} {{$user->last_name}} </a> </h3> 
                        
                        <p> <i class="fa fa-map-marker"></i>
                            <span>{{$user->address}}</span>
                        </p>
                </div>

                @endforeach
              
                
                
                
               </div>
   
           </div>
        </section>
              <section class="reg_all">
               <div class="reg_img">  <img src="{{URL::to('doc_front/assets/img/reg.png')}}" class="img-fluid"/>  </div>
               <div class="reg_cont">
                 <div class="container">
                  <h3>Discover making appointments online</h3>        
                  <ul>
                   <li> Manage your availability easily</li>
                   <li> Reduce unfulfilled appointments</li>
                   <li>  Offer an exceptional experience to all your patients</li>
                 </ul>
                 <div class="reg_button">
                  <a href="#" class="btn btn-outline-primary">Register on DabaDoc</a>
                </div>
              </div>
            </div>
          </section>

          <!-- ==== ss testmonial  ==== -->
          <section id="testmonial" class="gradintbluere">
            <div class="container">
              <div class="ss_heading">
                <h3>What clients  <span>   says</span></h3>
                <p>People feedback</p>
              </div> 
              <div class="row justify-content-md-center">
                <div class="col col-lg-8">
                  <div class="ss_testmonial">
                    <div class="testmonial_item">
                      <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
                      <div class="text-center"><img src="{{URL::to('doc_front/assets/img/t1.jpg')}}" class="rounded" alt="t1"></div>
                      <p class="small_titel">-rs salim1</p>
                    </div>
                    <div class="testmonial_item">
                      <p>" consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
                      <div class="text-center"><img src="{{URL::to('doc_front/assets/img/t1.jpg')}}" class="rounded" alt="t1"></div>
                      <p class="small_titel">-rs salim1</p>
                    </div>
                    <div class="testmonial_item">
                      <p>" Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
                      <div class="text-center"><img src="{{URL::to('doc_front/assets/img/t1.jpg')}}" class="rounded" alt="t1"></div>
                      <p class="small_titel">-rs salim1</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ==== ss end testmonial  ==== -->
          <section>
            <div class="container">
              <div class="row">
                <div class="ss_clients_logo">
                  <ul>
                    <li><a href="#"><img src="{{URL::to('doc_front/assets/img/l1.png')}}"></a></li>
                    <li><a href="#"><img src="{{URL::to('doc_front/assets/img/l2.png')}}"></a></li>
                    <li><a href="#"><img src="{{URL::to('doc_front/assets/img/l3.png')}}"></a></li>
                    <li><a href="#"><img src="{{URL::to('doc_front/assets/img/l4.png')}}"></a></li> 

                  </ul>
                  <h3> <span>Download the DabaDoc app </span> <strong>Find doctors nearby</strong> View patient reviews, Make an appointment in one click</h3>
                  <div class="download_app">
                    <a href="#"><img src="{{URL::to('doc_front/assets/img/a.png')}}"/></a>
                    <a href="#"><img src="{{URL::to('doc_front/assets/img/g.png')}}"/></a>
                  </div>
                </div>

              </div>
            </div>
          </section>
          <!-- =======ss body end========= -->

          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9x8mCn5-P8XUl59uGqwmmcU6Alt1qza8&libraries=places&callback=initAutocomplete" async defer></script>
          <script type="text/javascript">
            var placeSearch, autocomplete, geocoder;

            function initAutocomplete() {
              geocoder = new google.maps.Geocoder();
              autocomplete = new google.maps.places.Autocomplete(
      (document.getElementById('autocomplete'))/*,
      {types: ['(cities)']}*/);

              autocomplete.addListener('place_changed', fillInAddress);
            }

            function codeAddress(address) {
              geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == 'OK') {
                  alert(results[0].geometry.location);
                } else {
                  alert('Geocode was not successful for the following reason: ' + status);
                }
              });
            }

            function fillInAddress() {
              var place = autocomplete.getPlace();
  //alert(place.place_id);
  //   codeAddress(document.getElementById('autocomplete').value);
}
</script>

@endsection