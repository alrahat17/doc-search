<?php
	$doctor = Auth::user('id');
?>
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
@extends('layouts.logged_in_doctor_layout')
@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush
@section('doctor_content')
<!-- =======ss body========= -->
<div class="main_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ss_heading">
					<h3>Hello,  <span> {{ $doctor->title }} {{ $doctor->first_name }} {{ $doctor->last_name}}</span> </h3>
					<!-- {{ $doctor }} -->
					<p>Complete your profile, it is only 23% complete</p>
					<p>Your DabaDoc account is still not visible to patients on the appointment platform <a href="#">How to proceed ?</a> </p>
				</div>
			</div>
			<div class="col-sm-12" id="ss_registration_content">
				<div class="ss_registration_content_top">
					<div class="doctor_profile">
						<div class="row justify-content-md-center">
							<div class="col-sm-3">
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Your Practices</a>
									<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Your Account</a>
									<!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">عربي</a> -->
									<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Procedures</a>
									<a class="nav-link" id="v-pills-photos-tab" data-toggle="pill" href="#v-pills-photos" role="tab" aria-controls="v-pills-settings" aria-selected="false">Mes Photos</a>
									<a class="nav-link" id="v-pills-cliniques-tab" data-toggle="pill" href="#v-pills-cliniques" role="tab" aria-controls="v-pills-settings" aria-selected="false">Establishment Affiliations</a>
								</div>
							</div>
							<div class="col-sm-8">
								<!-- <form action="{{url('/doctor_update',$doctor->id)}}" method="POST" enctype="multipart/form-data"> -->
								<form action="" method="" enctype="multipart/form-data">
									{{csrf_field()}}
									<div class="card">
										<div class="card-header">
											<button type="submit" class="btn btn-success float-right">Sauvegarder</button>
										</div>
										<div class="card-body">
											<div class="tab-content" id="v-pills-tabContent">
												<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
													<div class="row">
														<div class="col-sm-7">


														 <form action="" id="myForm">
															<div class="form-group">
																<label for="exampleFormControlInput1">Address line 1</label>
																<input type="text" name="street_no" class="form-control" placeholder="Exemple: 11, Avenue du 16 Novembre" >
															</div>
															
														</form>
														
														<div class="form-group">
																<label for="exampleFormControlInput1">Address line 2</label>
																<input type="text" name="apartment_no"  class="form-control" placeholder="Exemple : Appt. A2 - 2ème étage" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Neighborhood</label>
																<input type="text" name="district" class="form-control" placeholder="Exemple : Agdal" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Instructions</label>
																<input type="text" name="location" class="form-control" placeholder="Exemple : Arrêt Tramway: Ancienne Médina , Ligne 2" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Postal code</label>
																<input type="text" name="postal_code"  class="form-control" placeholder="Exemple: 10000" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">City</label>
																<select class="js-example-basic-single form-control" name="City[]" >
																	<option value="AL">--Select City--</option>
																	@foreach($citys as $city)
																	<option value="AC"> {{ $city->city }}</option>
																	@endforeach
																</select>
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">* Practice phone number (primary)</label>
																<input type="tel" name="phone_no" value="{{ $doctor->phone_no }}"  class="form-control" id="phone"  placeholder="0650-123456">
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Practice phone number (secondary)</label>
																<input type="tel" name="phone_others" class="form-control" id="phone2" placeholder="0650-123456">
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">* Cell phone number</label>
																<input type="tel" name="phone_portable" value="{{ $doctor->phone_portable }}" class="form-control" id="phone3" placeholder="0650-123456">
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Website help</label>
																<input type="text" name="web_address"  class="form-control" placeholder="http://" >
															</div>
															
														



														</div>
														<div class="col-sm-5" id="map"> 
        
     
															<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14606.945101469377!2d90.4266586466782!3d23.756782106754805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdoctor!5e0!3m2!1sen!2sbd!4v1546778299870" width="600" height="350" frameborder="0" style="border:0; width:100%;" allowfullscreen=""></iframe>
														</div>
													
													</div>
												</div>
												<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<label for="exampleFormControlSelect2">* Title</label>
																<select class="form-control" id="exampleFormControlSelect2">
																	<option>Dr.</option>
																	<option>Pr.</option>
																	<option>--</option>
																</select>
															</div>
															<div class="form-group">
																<label for="exampleFormControlSelect2">* Sex</label>
																<select class="form-control" id="exampleFormControlSelect2">
																	<option>Man.</option>
																	<option>Women.</option>
																	<option>--</option>
																</select>
															</div>
															<div class="form-group">
																<label for="exampleInputFirstname">* First name</label>
																<input value="salim" type="text" class="form-control" id="exampleInputFirstname" aria-describedby="FirstnameHelp" placeholder="">
															</div>
															<div class="form-group">
																<label for="exampleInputname">* Name</label>
																<input value="ahamad" type="text" class="form-control" id="exampleInputname" aria-describedby="nameHelp" placeholder="">
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf">* Specialty (ies)</label>
																<select class="js-example-basic-multiple form-control" name="specialty[]" style="width:100%;" multiple="multiple">
																	<option value="AL"> Algologue - Treatment of pain allergist</option>
																	<option value="AC"> Acupuncture</option>
																	<option value="AD"> Addictologist</option>
																	<option value="Alg"> Alabama</option>
																	<option value="PED"> Pediatric Allergist </option>
																</select>
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf">* Spoken languages</label>
																<select class="js-example-basic-multiple form-control" name="specialty[]" style="width:100%;" multiple="multiple">
																	<option value="AL"> Amazigh</option>
																	<option value="AC"> Deutsch</option>
																	<option value="AD"> English</option>
																	<option value="Alg"> Español</option>
																	<option value="PED"> French </option>
																</select>
															</div>
															<div class="form-group">
																<label for="exampleInputname"> Your first year of exercise</label>
																<input value="ahamad" type="nember" class="form-control" id="exampleInputname" aria-describedby="nameHelp" placeholder="2001">
															</div>
															<div class="form-group">
																<label for="exampleInputpassword">* Password</label>
																<input type="text" class="form-control" id="exampleInputpassword" aria-describedby="passwordHelp" placeholder="">
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf">* Confirmation of password</label>
																<input type="text" class="form-control"  placeholder="">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label for="exampleFormControlTextarea1">Diploma and training help</label>
																<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Exemple :  Doctorat en chirurgie dentaire - Université de Paris VII, 1994
																Inscrit à l'Ordre des Chirurgiens-Dentistes :  34 2322"></textarea>
															</div>
															<div class="form-group">
																<label for="exampleFormControlTextarea1">Cabinet Presentation Help</label>
																<textarea class="form-control" placeholder="Exemple :  Le Dr DabaDoc vous reçoit avec Leila, son assistante, dans son cabinet de l'Avenue du 16 Novembre. Dentiste omnipraticien, il est notamment formé pour réaliser tous les actes chirurgicaux d'Implantologie et de Prothèses. Très à l'écoute, le Dr Doc s'attache à prendre le temps d'expliquer avec pédagogie les traitements à ses patients." id="exampleFormControlTextarea1" rows="3"></textarea>
															</div>
														</div>
													</div>
												</div>
												<!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">                                            <div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="float-right" for="exampleInputpasswordcrf">الإسم :</label>
															<input type="text" class="form-control text-right"  placeholder="">
														</div>
														<div class="form-group">
															<label  class="float-right" for="exampleInputpasswordcrf">النسب :</label>
															<input type="text" class="form-control text-right" placeholder="">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group ">
															<label  class="float-right" for="exampleFormControlTextarea1">الدبلوم والتكوين :</label>
															<textarea class="form-control text-right" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
														<div class="form-group text-right">
															<label  class="float-right" for="exampleFormControlTextarea1"> تقديم العيادة : </label>
															<textarea class="form-control text-right" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>
												</div>
											</div> -->
											<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
												<div class="row">
													<div class="col-sm-5">
														<div class="form-group">
															<label for="exampleInputpasswordcrf">Name of care or act </label>
															<input type="text" class="form-control"  placeholder="">
														</div>
														<div class="form-group">
															<label for="exampleInputpasswordcrf">Please specify the price (optional) (DH)</label>
															<button type="button" class="btn btn-light ss_fixed_price">Fixed price  </button>
															<button type="button" class="btn btn-dark ss_variable_price"> Variable price </button>
														</div>
														<div class="form-group">
															<label for="exampleInputpasswordcrf"> Fixed price </label>
															<div class="row">
																<div class="col ss_fixed_price_val"><input type="number" class="form-control"  placeholder="Price"></div>
																<div class="col ss_variable_price_val"><input type="nember" class="form-control"  placeholder="Maximum price"></div>
															</div>
														</div>
														<div class="form-check">
															<input type="checkbox" class="form-check-input" id="exampleCheck1">
															<label class="form-check-label" for="exampleCheck1">Show price on my profile</label>
														</div>
													</div>
													<div class="col-sm-7">
														<div class="table-responsive">
															<table class="table table-striped">
																<thead>
																	<tr>
																		<th scope="col">Name of care or act </th>
																		<th scope="col">Price </th>
																		<th scope="col">Visibility</th>
																		<th scope="col"> </th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th scope="row">Test</th>
																		<td>300 - 400 DH</td>
																		<td> <i class="fa fa-lock" aria-hidden="true"></i> </td>
																		<td> <i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i> </td>
																	</tr>
																	<tr>
																		<th scope="row">Test</th>
																		<td>300 - 400 DH</td>
																		<td> <i class="fa fa-globe" aria-hidden="true"></i> </td>
																		<td> <i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i> </td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="v-pills-photos" role="tabpanel" aria-labelledby="v-pills-photos-tab">
												<div class="row">
													<div class="col-sm-3">
														<div class="card">
															<img class="card-img-top" src="assets/img/d1.jpg" alt="Card image cap">
															<div class="card-body">
																<i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i>
															</div>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="card">
															<img class="card-img-top" src="assets/img/d2.jpg" alt="Card image cap">
															<div class="card-body">
																<i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i>
															</div>
														</div></div>
														<div class="col-sm-3">
															<div class="card">
																<img class="card-img-top" src="assets/img/d3.jpg" alt="Card image cap">
																<div class="card-body">
																	<i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i>
																</div>
															</div></div>
															<div class="col-sm-3">
																<div class="card">
																	<img class="card-img-top" src="assets/img/d4.jpg" alt="Card image cap">
																	<div class="card-body">
																		<i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i>
																	</div>
																</div></div>
																<div class="col-sm-3">
																	<div class="card">
																		<img class="card-img-top" src="assets/img/d5.jpg" alt="Card image cap">
																		<div class="card-body">
																			<i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane fade" id="v-pills-cliniques" role="tabpanel" aria-labelledby="v-pills-cliniques-tab">
															<h4>Select and confirm the clinic (s) / places of consultation</h4>
															<div class="row">
																<div class="col-sm-6">
																	<div class="form-group row">
																		<div class="col-sm-9">
																			<input type="text" class="form-control" id="" placeholder=" Enter Name...">
																		</div>
																		<div class="col-sm-3">
																			<button type="button" class="btn btn-primary">Add</button>
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<ul>
																		<li>  Al Hakim Center (Oujda) <span style="color:#ff4f48;">  - Delete</span></li>
																		<li> Hemodialysis Khouribga Nephrology Center (Khouribga) <span style="color:#ff4f48;">  - Delete</span></li>
																		<li> Hemodialyse Center Of Marrakech (Marrakech) <span style="color:#ff4f48;">  - Delete</span></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/><br/>
		@endsection
		@push('js')
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		 




		<script type="text/javascript">
				$(document).ready(function(){
					$('#save').click(function(){
						var data = $('#myForm').serialize();
						alert(data);
					});
				});
			</script>
		@endpush