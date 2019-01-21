@extends('layouts.front_layout')
@section('front_content')
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

<!-- =======ss body========= -->
<div class="main_area">
	<div class="google_map_top">
		{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14606.945101469377!2d90.4266586466782!3d23.756782106754805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdoctor!5e0!3m2!1sen!2sbd!4v1546778299870" width="600" height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe> --}}

	</div>
	<div id="map"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ss_heading">
					<h3> Make an appointment with <span> a doctor</span> or dentist <span> </span> </h3> 

				</div>
			</div>


			<div class="col-sm-3" id="left_sitebar">
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
					<div class="banner"><a href="#"><img src="assets/img/small_banner.png" class="img-fluid"/> </a></div>
				</div>
			</div>
			<div class="col-sm-9" id="right_main_content">
				<div class="doctor_list">
					<div class="top_filter">
						<div class="doc-sortby"> 
							<span class="doc-select">
								{{-- <select name="sort_by" class="form-control" id="sort_by">
									<option value="">Sort By</option>
									<option value="recent">Most recent</option>
									<option value="featured">Featured</option>
									<option value="title">Alphabetical</option>
									<option value="distance">Sort By Distance</option>
									<option value="likes">Sort By Likes</option>
								</select> --}}
							</span>
							<span class="doc-select">
								<select class="form-control" name="order" id="order">
									<option value="ASC" selected="">ASC</option>
									<option value="DESC">DESC</option>
								</select>
							</span> 
							<span class="doc-select">
								{{-- <select name="per_page" class="form-control">
									<option value="">Per Page</option>
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="50">50</option>
									<option value="70">70</option>
									<option value="100">100</option>
								</select> --}}
							</span> 
						</div>
					</div>
					@foreach($users as $user)   
					<div class="ss_to_doctor_item">
						<div class="row"> 
							<div class="col-4">
								<div class="top_s_img">
									<a href="#"> <img src="{{URL::to($user->image)}}" class="img-fluid"/> </a> 
									<a class="doc-featuredicon" href="javascript:;"><i class="fa fa-bolt"></i>Doctor</a>
									<a class="doc-featuredicon doc-verfiedicon" href="javascript:;"><i class="fa fa-shield"></i>Verified</a>
									<span class="doc-stars"><span style="width:80%"></span></span>
								</div>
							</div>
							<div class="col-8">
								<h3> <a href="#"> {{$user->title}} {{$user->first_name}} {{$user->last_name}} </a> </h3> 
								<p> <i class="fa fa-map-marker"></i>
									<span>{{$user->address}}</span>
								</p>

								
								<p> <i class="fa fa-phone"></i>
									<span>{{$user->phone_no}} </span>
								</p>
								<p> <i class="fa fa-phone"></i>
									<span>{{$user->id}} </span>
								</p>
								<p> <i class="fa fa-envelope-o"></i>
									<span>rc@docdirect.com</span>
								</p> 

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing elit, sed do  sed do eiusmod tempor...</p>
								<a href="{{ route('doctor_view',$user->id) }}">View profile</a>
							</div>
						</div>
					</div>

					



					@endforeach



					
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

  
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9x8mCn5-P8XUl59uGqwmmcU6Alt1qza8&callback=initMap"
    async defer></script>


    <script type="text/javascript">
      
     var map;
     
     function initMap() {

      var location = "Africa";
      var google_map_key = 'AIzaSyC9x8mCn5-P8XUl59uGqwmmcU6Alt1qza8';

      <?php
        foreach ($users as $user){
        $location = $user->address;
       ?>
        var loc = "<?php echo $location; ?>";

         axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
        params:{
          address: loc,
          key:google_map_key,
        }
      })
      .then(function(response){
        // Log full response
        console.log(response);

        // Geometry
        var lat = response.data.results[0].geometry.location.lat;
        var lng = response.data.results[0].geometry.location.lng;
        var myLatlng = new google.maps.LatLng(lat,lng);
       
        var geometryOutput = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 4,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
         

        
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: geometryOutput,
        });

        


        
        
        //alert(myLatlng);

    });

      

     <?php } ?>

      }
        

  </script>   


@endsection