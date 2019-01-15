@extends('layouts.front_layout')
@section('front_content')
<!-- =======ss body========= -->
<style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height:380px; 
        width:1349px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
<div class="main_area">

	<!-- <div class="google_map_top">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14606.945101469377!2d90.4266586466782!3d23.756782106754805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdoctor!5e0!3m2!1sen!2sbd!4v1546778299870" width="600" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
	</div> -->

	<div id="map"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ss_heading">
					<h3> Make an appointment with <span> a doctor</span> or dentist <span> </span> </h3>
					
				</div>
			</div>
			
			<div class="col-sm-4" id="left_sitebar">
				<div class="wegith_area">
					<h3>Narrow your search</h3>
					<form method="get" action="search.html">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Type Keyword...">
						</div>
						<div class="form-group">
							<select class="js-example-basic-single  form-control" name="state">
								<option data-subtext="Rep California"> Algologue - Traitement de la douleur </option>
								<option data-subtext="Sen California">Bill Gordon</option>
								<option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
								<option data-subtext="Rep Alabama">Mario Flores</option>
								<option data-subtext="Rep Alaska">Don Young</option>
								<option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Or ? (neighborhood, city ...)">
						</div>
						<button type="submit" class="btn btn-primary">Apply Filter</button>
					</form>
				</div>
				<div class="wegith_area">
					<h3>Filter By Specialities</h3>
					<form>
						<ul>
							
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Cardiologist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Colorectal surgeon</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Dentist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Dermatologist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Dietician</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Eye Doctor</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Eye, Nose, Ear (ENT) specialist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Nephrologist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Neurosurgeon</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Nutritionist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Oncologist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Ophthalmologist</label>
								</div>
							</li>
							<li>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Orthodontist</label>
								</div>
							</li>
						</ul>
						<button type="submit" class="btn btn-primary">Refine Search</button>
					</form>
					
				</div>
				<div class="wegith_area">
					<div class="banner"><a href="#"><img src="{{ asset('doc_front/assets/img/small_banner.png')}}" class="img-fluid"/> </a></div>
				</div>
			</div>
			<div class="col-sm-8" id="right_main_content">
				<div class="doctor_list">
					<div class="top_filter">
						<div class="doc-sortby">
							<span class="doc-select">
								<select name="sort_by" class="form-control" id="sort_by">
									<option value="">Sort By</option>
									<option value="recent">Most recent</option>
									<option value="featured">Featured</option>
									<option value="title">Alphabetical</option>
									<option value="distance">Sort By Distance</option>
									<option value="likes">Sort By Likes</option>
								</select>
							</span>
							<span class="doc-select">
								<select class="form-control" name="order" id="order">
									<option value="ASC" selected="">ASC</option>
									<option value="DESC">DESC</option>
								</select>
							</span>
							<span class="doc-select">
								<select name="per_page" class="form-control">
									<option value="">Per Page</option>
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="50">50</option>
									<option value="70">70</option>
									<option value="100">100</option>
								</select>
							</span>
						</div>
					</div>
					@foreach($doctors as $doctor)
					<div class="ss_to_doctor_item">
						<div class="row">
							<div class="col-4">
								<div class="top_s_img">
									<a href="#"> <img src="{{ asset('doc_front/assets/img/d1.jpg')}}" class="img-fluid"/> </a>
									<a class="doc-featuredicon" href="javascript:;"><i class="fa fa-bolt"></i>Doctor</a>
									<a class="doc-featuredicon doc-verfiedicon" href="javascript:;"><i class="fa fa-shield"></i>Verified</a>
									<span class="doc-stars"><span style="width:80%"></span></span>
								</div>
							</div>
							<div class="col-8">
								<h3> <a href="#">{{ $doctor->title}} {{ $doctor->first_name }} {{ $doctor->last_name}}</a> </h3>
								<p> <i class="fa fa-map-marker"></i>
									<span>91 Warrington Cres, London W9 1EH, UK</span>
								</p>
								<p> <i class="fa fa-phone"></i>
									<span>{{ $doctor->phone_portable }}</span>
								</p>
								<p> <i class="fa fa-envelope-o"></i>
									<span>{{ $doctor->email }}</span>
								</p>
								<p>{{ str_limit($doctor->address, 70) }}</p>
								<a href="#">View profile</a>
							</div>
						</div>
					</div>
					@endforeach
				<!-- 	<div class="ss_to_doctor_item">
						<div class="row">
							<div class="col-4">
								<div class="top_s_img">
									<a href="#"> <img src="{{ asset('doc_front/assets/img/d2.jpg')}}" class="img-fluid"/> </a>
									<a class="doc-featuredicon" href="javascript:;"><i class="fa fa-bolt"></i>Doctor</a>
									<a class="doc-featuredicon doc-verfiedicon" href="javascript:;"><i class="fa fa-shield"></i>Verified</a>
									<span class="doc-stars"><span style="width:80%"></span></span>
								</div>
							</div>
							<div class="col-8">
								<h3> <a href="#"> Dr. Richer </a> </h3>
								<p> <i class="fa fa-map-marker"></i>
									<span>91 Warrington Cres, London W9 1EH, UK</span>
								</p>
								<p> <i class="fa fa-phone"></i>
									<span>56 235 856843</span>
								</p>
								<p> <i class="fa fa-envelope-o"></i>
									<span>rc@docdirect.com</span>
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="#">View profile</a>
							</div>
						</div>
					</div>
					<div class="ss_to_doctor_item">
						<div class="row">
							<div class="col-4">
								<div class="top_s_img">
									<a href="#"> <img src="{{ asset('doc_front/assets/img/d3.jpg')}}" class="img-fluid"/> </a>
									<a class="doc-featuredicon" href="javascript:;"><i class="fa fa-bolt"></i>Doctor</a>
									<a class="doc-featuredicon doc-verfiedicon" href="javascript:;"><i class="fa fa-shield"></i>Verified</a>
									<span class="doc-stars"><span style="width:80%"></span></span>
								</div>
							</div>
							<div class="col-8">
								<h3> <a href="#"> Dr. Richer </a> </h3>
								<p> <i class="fa fa-map-marker"></i>
									<span>91 Warrington Cres, London W9 1EH, UK</span>
								</p>
								<p> <i class="fa fa-phone"></i>
									<span>56 235 856843</span>
								</p>
								<p> <i class="fa fa-envelope-o"></i>
									<span>rc@docdirect.com</span>
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="#">View profile</a>
							</div>
						</div>
					</div>
					<div class="ss_to_doctor_item">
						<div class="row">
							<div class="col-4">
								<div class="top_s_img">
									<a href="#"> <img src="{{ asset('doc_front/assets/img/d4.jpg')}}" class="img-fluid"/> </a>
									<a class="doc-featuredicon" href="javascript:;"><i class="fa fa-bolt"></i>Doctor</a>
									<a class="doc-featuredicon doc-verfiedicon" href="javascript:;"><i class="fa fa-shield"></i>Verified</a>
									<span class="doc-stars"><span style="width:80%"></span></span>
								</div>
							</div>
							<div class="col-8">
								<h3> <a href="#"> Dr. Richer </a> </h3>
								<p> <i class="fa fa-map-marker"></i>
									<span>91 Warrington Cres, London W9 1EH, UK</span>
								</p>
								<p> <i class="fa fa-phone"></i>
									<span>56 235 856843</span>
								</p>
								<p> <i class="fa fa-envelope-o"></i>
									<span>rc@docdirect.com</span>
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="#">View profile</a>
							</div>
						</div>
					</div>
					<div class="ss_to_doctor_item">
						<div class="row">
							<div class="col-4">
								<div class="top_s_img">
									<a href="#"> <img src="{{ asset('doc_front/assets/img/d5.jpg')}}" class="img-fluid"/> </a>
									<a class="doc-featuredicon" href="javascript:;"><i class="fa fa-bolt"></i>Doctor</a>
									<a class="doc-featuredicon doc-verfiedicon" href="javascript:;"><i class="fa fa-shield"></i>Verified</a>
									<span class="doc-stars"><span style="width:80%"></span></span>
								</div>
							</div>
							<div class="col-sm-8">
								<h3> <a href="#"> Dr. Richer </a> </h3>
								<p> <i class="fa fa-map-marker"></i>
									<span>91 Warrington Cres, London W9 1EH, UK</span>
								</p>
								<p> <i class="fa fa-phone"></i>
									<span>56 235 856843</span>
								</p>
								<p> <i class="fa fa-envelope-o"></i>
									<span>rc@docdirect.com</span>
								</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<a href="#">View profile</a>
							</div>
						</div>
					</div> -->
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-end">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- =======ss body end========= -->
@push('js')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
 <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7a-pVRxc_cx00QNTiPWQZW50qxiqZGO0&libraries=places"></script>
 <script type="text/javascript">
    var map;
    var myLatLng;
    $(document).ready(function() {
        geoLocationInit();
        function geoLocationInit() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, fail);
            } else {
                alert("Browser not supported");
            }
        }

    function success(position) {

        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        console.log([latval,lngval]);
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
        //nearbySearch(myLatLng, "school");
        searchGirls(latval,lngval);
      }

     function fail() {
          alert("it fails");
      }


       //Create Map
       function createMap(myLatLng) {
           map = new google.maps.Map(document.getElementById('map'), {
               center: myLatLng,
               zoom: 12
           });
           var marker = new google.maps.Marker({
               position: myLatLng,
               map: map,
               draggable:true,
           });

           /*Drugable Functionality*/

           google.maps.event.addListener(marker, 'dragend', function(evt){
            var lat = evt.latLng.lat().toFixed(3);
            var lng = evt.latLng.lng().toFixed(3);
            $('#latitude').val(lat);
            $('#longitude').val(lng);
           });
        }

        //Create marker
       function createMarker(latlng, icn, name) {
           var marker = new google.maps.Marker({
               position: latlng,
               map: map,
               //icon: icn,
               draggable:true,
               title: name
           });
       }
        function searchGirls(lat,lng){
            $.post('http://localhost:8000/api/searchGirls',{lat:lat,lng:lng},function(match){
            	console.log(match);
              $.each(match, function(i,val){
                var glatval = val.lat;
                var glngval = val.lng;
                var gname = val.name;
                var GLatLng = new google.maps.LatLng(glatval, glngval);
                var gicn= 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                createMarker(GLatLng,gicn,gname);
                
               });
            });
        }

      });
   </script>
  @endpush

@endsection