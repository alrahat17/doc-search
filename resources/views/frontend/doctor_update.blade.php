<?php
	$doc_info = Auth::user();
?>
@extends('layouts.front_layout')
@section('front_content')
<div class="main_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ss_heading">
					@if(Session::has('success'))
					<span class="alert alert-success">{{ Session::get('success')}}</span>
					@endif
					<h3>Hello,  <span> {{$doc_info->title }} {{ $doc_info->first_name}} {{ $doc_info->last_name}}</span></h3>
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
									<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Your Practice</a>
									<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Your Account</a>
									<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Procedures</a>
									<a class="nav-link" id="v-pills-photos-tab" data-toggle="pill" href="#v-pills-photos" role="tab" aria-controls="v-pills-settings" aria-selected="false">Your Photos</a>
									<a class="nav-link" id="v-pills-cliniques-tab" data-toggle="pill" href="#v-pills-cliniques" role="tab" aria-controls="v-pills-settings" aria-selected="false">Estabilishment Affiliations</a>
									
								</div>
							</div>
							<div class="col-sm-8">
								<!-- <form method="post" id="myform"> -->
								<!-- 	{{ csrf_field()}} -->
								<div class="card">
									<div class="card-header">
										<!-- <button type="submit" class="btn btn-success float-right">Sauvegarder</button> -->
									</div>
									<div class="card-body">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
												<form action="{{ route('docpractice') }}" method="POST">
													@csrf
													<div class="row">
														<div class="col-sm-7">
															<div class="form-group">
																<!-- <input type="hidden" name="id" id="id"> -->
																<label for="address_one">Address line 1</label>
																<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
																<input type="text" name="address_one" id="address_one" class="form-control" placeholder="Exemple: 11, Avenue du 16 Novembre" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Address line 2</label>
																<input type="text" name="address_two" id="address_two" class="form-control" placeholder="Exemple : Appt. A2 - 2ème étage" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Neighborhood</label>
																<input type="text" name="neighborhood" id="neighborhood" class="form-control" placeholder="Exemple : Agdal" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Instructions</label>
																<input type="text" name="instructions" id="instructions" class="form-control" placeholder="Exemple : Arrêt Tramway: Ancienne Médina , Ligne 2" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">Postal code</label>
																<input type="text" name="postalcode" id="postalcode" class="form-control" placeholder="Exemple: 10000" >
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">City</label>
																<select class="js-example-basic-single form-control" name="city_id" id="city_id" >
																	<option value="AL">Select city</option>
																	@foreach($citys as $city)
																	<option value="{{ $city->id }}" <?php if($city->id == $doc_info->city_id) echo "selected"; ?>>{{ $city->city }}</option>
																	@endforeach
																</select>
															</div>
															
															<div class="form-group">
																<label for="exampleFormControlInput1">Phone number (other)</label>
																<input type="tel" name="phone_portable" id="phone_portable" class="form-control" placeholder="0650-123456">
															</div>
															
															<div class="form-group">
																<label for="exampleFormControlInput1">Website help</label>
																<input type="text" name="web_address" id="web_address" class="form-control" placeholder="http://" >
															</div>
															<div class="form-group">
																<label for="exampleInputname"> Your first year of exercise</label>
																<input type="nember" name="exercise" class="form-control" id="exercise" aria-describedby="nameHelp" placeholder="2001">
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf">* Spoken languages</label>
																<select class="js-example-basic-multiple form-control" name="language" style="width:100%;" multiple="multiple">
																	<option value="Amazigh"> Amazigh</option>
																	<option value="Deutsch"> Deutsch</option>
																	<option value="English"> English</option>
																	<option value="Español"> Español</option>
																	<option value="French"> French </option>
																</select>
															</div>
															<div class="form-group">
																<label for="certification">Education and Certifications</label>
																<textarea class="form-control" id="certification" name="certification" rows="3" placeholder="Exemple : Medical School: University de Paris Vll, 1994
																Registered with the Dental Surgeon Association of Nairobi: 34 342"></textarea>
															</div>
															<div class="form-group">
																<label for="exampleFormControlTextarea1">Professional Statement</label>
																<textarea class="form-control" id="prostatement" name="prostatement" placeholder="Example:
																Dr. DabaDoc welcomes you to her practice on Main Street with her assistant, Leila. Dr. DabaDoc's goal is to provide excellent dental care in a compassionate manner to all of her patients. Dr. DabaDoc is a passionate dentist who strives to provide the very best and gentle care for all her patients. She is a life-long learner and participates in numerous continuing education courses each year so that she can continually offer her patients the latest advancements in dentistry." id="exampleFormControlTextarea1" rows="5"></textarea>
															</div>
															
														</div>
														<div class="col-sm-5">
															<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14606.945101469377!2d90.4266586466782!3d23.756782106754805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdoctor!5e0!3m2!1sen!2sbd!4v1546778299870" width="600" height="350" frameborder="0" style="border:0; width:100%;" allowfullscreen=""></iframe>
														</div>
													</div>
													<button type="submit" class="btn btn-success ">Save Information</button>
												</form>
											</div>
											<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
												<form action="{{ route('update_doctor', $doc_info->id) }}" method="POST">
													@csrf
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<label for="title">* Title</label>
																<select class="form-control" id="title" name="title">
																	<option value="{{ $doc_info->title }}" <?php if($doc_info->title == "Dr.") echo "selected"; ?>>{{ $doc_info->title }}</option>
																	<option>Pr.</option>
																	<option>--</option>
																</select>
															</div>
															<div class="form-group">
																<label for="gender">* Gender</label>
																<select class="form-control" id="gender" name="gender">
																	<option value="Man">Man.</option>
																	<option value="Women">Women.</option>
																	<option>--</option>
																</select>
															</div>
															<div class="form-group">
																<label for="first_name">* First name</label>
																<input type="text" class="form-control" name="first_name" id="first_name" value="{{ $doc_info->first_name}}" aria-describedby="FirstnameHelp" placeholder="">
																<input type="hidden" name="user_type" value="doctor" >
															</div>
															<div class="form-group">
																<label for="last_name">* Name</label>
																<input type="text" value="{{$doc_info->last_name}}" name="last_name" class="form-control" id="last_name" aria-describedby="nameHelp" placeholder="">
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf">* Specialty (ies)</label>
																<select class="js-example-basic-multiple form-control" name="specialty_id" style="width:100%;" multiple="multiple">
																	@foreach($specialtys as $specialty)
																	<option value="{{ $specialty->id }}" <?php if($specialty->id == $doc_info->specialty_id ) echo "selected"; ?>>{{ $specialty->spcl_name }}</option>
																	@endforeach
																</select>
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">* Telephone number (cabinet)</label>
																<input type="tel" name="phone_no" id="phone_no" value="{{ $doc_info->phone_no }}" class="form-control" placeholder="0650-123456">
															</div>
															<div class="form-group">
																<label for="exampleFormControlInput1">* Number of Portable</label>
																<input type="tel" name="cell_phone" id="cell_phone" class="form-control" placeholder="0650-123456">
															</div>
															<div class="form-group">
																<label for="exampleInputpassword">* Password</label>
																<input type="password" name="password" id="password" class="form-control" >
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf">* Confirmation of password</label>
																<input type="password" name="password_confirmation" id="password_confirm" value="{{ old('password_confirmation')}}" class="form-control">
															</div>
														</div>
														<div class="col-sm-6">
															
														</div>
													</div>
													<button type="submit" class="btn btn-success ">Save Information</button>
												</form>
											</div>
											<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" class="active">


												<form method="post" id="procedure_form">
													@csrf
													<div class="row">
														<div class="col-sm-5">
															<div class="form-group">
																<label for="exampleInputpasswordcrf">Procedure name</label>
																<input type="text" name="procedure_name" id="procedure_name" class="form-control"  placeholder="">

																<input type="hidden" name="user_id" value="1" class="form-control"  placeholder="">
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf">Please specify the price (optional) (DH)</label>
																<button type="button" class="btn btn-light ss_fixed_price">Fixed price  </button>
																<button type="button" class="btn btn-dark ss_variable_price"> Variable price </button>
															</div>
															<div class="form-group">
																<label for="exampleInputpasswordcrf"> Fixed price </label>
																<div class="row">
																	<div class="col ss_fixed_price_val"><input type="number" name="fixed_price" id="fixed_price" class="form-control"  placeholder="Price"></div>
																	<div class="col ss_variable_price_val"><input type="number" name="variable_price" id="variable_price" class="form-control"  placeholder="Maximum price"></div>
																</div>
															</div>
															<div class="form-check">
																<input type="checkbox" name="status" value="1" class="form-check-input" id="exampleCheck1">
																<label class="form-check-label" for="exampleCheck1">Show price on my profile</label>
															</div><br/>
															<!-- <button type="button" id="save" class="btn btn-success">Add</button> -->
															<button type="button" id="save" class="btn btn-primary">Add</button>
														</div>
													</form>



													<div class="col-sm-7">
														<div class="table-responsive">
															 <div class="alart" id="message" style="display:none"></div>
															<table class="table table-striped">
																<thead>
																	<tr>
																		<th scope="col">Name of care or act </th>
																		<th scope="col">Price </th>
																		<th scope="col">Visibility</th>
																		<th scope="col"> </th>
																	</tr>
																</thead>
																<tbody >
																	@foreach($doctor_pricings as $doctor_pricing)
																	<tr>
																		<th scope="row">{{ $doctor_pricing->procedure_name }}</th>
																		<td>{{ $doctor_pricing->fixed_price }} - {{ $doctor_pricing->variable_price }} DH</td>
																		<td> <i class="fa fa-lock" aria-hidden="true"></i> </td>
																		<td> <i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i> </td>
																	</tr>
																	@endforeach
																    <tr id="add">
							
																		<!-- <th scope="row">Test</th>
																		<td>300 - 400 DH</td>
																		<td> <i class="fa fa-globe" aria-hidden="true"></i> </td>
																		<td> <i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i> </td> -->
																	</tr>
																	<!-- <tr>
																		<th scope="row">Test</th>
																		<td>300 - 400 DH</td>
																		<td> <i class="fa fa-globe" aria-hidden="true"></i> </td>
																		<td> <i style="color:dodgerblue;" class="fa fa-pencil-square-o" aria-hidden="true"></i> <i  style="color:#ff4f48;" class="fa fa-trash-o" aria-hidden="true"></i> </td>
																	</tr> -->
																</tbody>
															</table>
														</div>
													</div>
												</div>
							
											</div>
											<div class="tab-pane fade" id="v-pills-photos" role="tabpanel" aria-labelledby="v-pills-photos-tab">
												<form method="post" id="upload_form" enctype="multipart/form-data">
													@csrf
													<div class="row">
														@foreach($doctor_galarys as $doctor_galary)
														<div class="col-sm-3">
															<div class="card">
																@if($doctor_galary->is_main_img == 0)
																<span class="text-center">Featured Image</span>
																<img class="card-img-top" src="{{ asset($doctor_galary->image )}}" alt="">
																@else
																<img class="card-img-top" src="{{ asset($doctor_galary->image )}}" alt="">
																@endif
																<div class="card-body">
																	<i style="color:dodgerblue;" data-toggle="modal" data-target="#updateImage-{{ $doctor_galary->id}}" class="fa fa-pencil-square-o" aria-hidden="true"></i>
																	
																	<i  style="color:#ff4f48;" data-toggle="modal" data-target="#deletImage-{{ $doctor_galary->id}}" class="fa fa-trash-o" aria-hidden="true"></i>
																</div>
															</div>
														</div>
														@endforeach
													</div>
												</form>
											</div>
											<div class="tab-pane fade" id="v-pills-cliniques" role="tabpanel" aria-labelledby="v-pills-cliniques-tab">
												<h4>Select establishment affiliations (save to your profile)</h4>
												<div class="row">
													<div class="col-sm-6">
													  <form action="{{ route('est_affliation') }}" method="POST">
														@csrf
														<div class="form-group row">
															<div class="col-sm-9">
																<input type="text" name="estab_name" class="form-control" id="estab_name" placeholder=" Enter Name...">
																<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
															</div>
															<div class="col-sm-3">
																<button type="submit" class="btn btn-primary">Add</button>
															</div>
														</div>
														</form>
													</div>
													<div class="col-sm-6">
														<ul>
															@foreach($est_afflications as $est_afflication)
															<li>  {{ $est_afflication->estab_name }} 
																  <a href="{{ route('delete_affliation', $est_afflication->id ) }}"><span style="color:#ff4f48;">  - Delete</span></a>
															</li>
															@endforeach
															<!-- <li> Hemodialysis Khouribga Nephrology Center (Khouribga) <span style="color:#ff4f48;">  - Delete</span></li>
															<li> Hemodialyse Center Of Marrakech (Marrakech) <span style="color:#ff4f48;">  - Delete</span></li> -->
														</ul>
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
</div>
<!-- Button trigger modal -->
@foreach($doctor_galarys as $doctor_galary)
<!-- Modal -->
<div class="modal fade" id="updateImage-{{ $doctor_galary->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center" id="exampleModalLabel">Edit my photo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="image">
					<img class="card-img-top img-thumbnail" style="height: 350px;" src="{{ asset($doctor_galary->image )}}" alt="">
				</div><hr/>
				<form action="{{ route('docimageupdate', $doctor_galary->id )}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form">
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="image" >
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary text-center">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
@foreach($doctor_galarys as $doctor_galary)
<!-- Modal -->
<div class="modal fade" id="deletImage-{{ $doctor_galary->id}}" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center" id="exampleModalLabel">Are you sure delete this image?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<form action="{{ route('docimagedelete', $doctor_galary->id )}}" method="post" enctype="multipart/form-data">
					@csrf
					<button type="submit" class="btn btn-danger text-center">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach
<!-- =======ss body end========= -->
@endsection
@push('js')
<script type="text/javascript">
	/*$(document).ready(function(){
		//alert('Hi');
		$('#save').click(function(){
			var data = $('#myform').serialize();
			$.ajax({
				type: 'POST',
				data: data,
				url: "{{ url('/doctorprising') }}",
				success: function(){
					alert('success');
				}
			});
		});
	});*/
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#save').click(function(){
		var procedure_form = $('#procedure_form').serialize();
		$.ajax({
			type: 'post',
			data: procedure_form,
			dataType:"JSON",
			headers:
			{
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			},
			url: "{{ url('/doctorprising') }}",
			  success: function(data)
                {

                	console.log(data.procedure_name);
                	var str="";
                    str+='<tr>';
					str+='<td>'+data.procedure_name+' </td>';													
					str+='<td>'+data.fixed_price+' </td>';													
					str+='</tr>'


                    $("#add").append(str);
                    //$("#add").append(stt);

                }
	    });
	});
});
</script> 



<script>
var iti='';
	$( document ).ready(function() {
	var input = document.querySelector("#phone_no");
		iti = intlTelInput(input, {
		utilsScript: "{{ asset('doc_front/cun_tel/js/utils.js?1537727621611')}}",
		autoHideDialCode: true,
		autoPlaceholder: "off",
		hiddenInput: "phone_no",
		defaultCountry: "aus",
		numberType: "MOBILE",
		separateDialCode:true,
		});
	});
	var input = document.querySelector("#cell_phone");
	window.intlTelInput(input, {
	utilsScript: "{{ asset('doc_front/cun_tel/js/utils.js?1537727621611')}}",
	autoHideDialCode: true,
	hiddenInput: "cell_phone",
	defaultCountry: "aus",
	numberType: "MOBILE",
	separateDialCode:true,
	});
	var input = document.querySelector("#phone_portable");
	window.intlTelInput(input, {
	utilsScript: "{{ asset('public/doc_back/cun_tel/js/utils.js?1537727621611')}}",
	autoHideDialCode: true,
	hiddenInput: "phone_portable",
	defaultCountry: "aus",
	numberType: "MOBILE",
	separateDialCode:true,
	});
</script>
@endpush