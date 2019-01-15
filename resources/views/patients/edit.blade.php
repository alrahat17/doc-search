@extends('layouts.logged_in_patient_layout')
@section('patient_content')
	<!-- =======ss body========= -->
	<div class="main_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ss_heading">
						<h3> Edit my <span>profile</span> </h3>  
					</div>
				</div>

				<div class="col-sm-12" id="ss_registration_content">
					<div class="ss_registration_content_top">

						<div class="registration_form">
							<div class="row justify-content-md-center">
								<div class="col-sm-8">

									<form action="{{route('update_patient_profile',$user->id)}}" method="post" enctype="multipart/form-data">

										{{csrf_field()}}
										

										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="exampleInputFirstname">* First name</label>
													<input type="text" class="form-control" id="exampleInputFirstname" name="first_name" aria-describedby="FirstnameHelp" placeholder="" value="{{$user->first_name}}">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="exampleInputname">* Name</label>
													<input type="text" class="form-control" value="{{$user->last_name}}" name="last_name" id="exampleInputname" aria-describedby="nameHelp" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">

											<div class="col-sm-6">
												<div class="form-group">
													<label for="exampleInputEmail1">* Email</label>
													<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="" value="{{$user->email}}">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="country_id">* Country</label>
													<select class="form-control" name="country_id">
														<option>Select Here..</option>
														@foreach ($countries as $country) 

														<option value="{{$country->id}}"<?php if($country->id == $user->country_id) echo "selected" ;?>>{{$country->country_name}}</option>

														@endforeach

													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="exampleInputpassword">* Password</label>
													<input type="password" value="12345678" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label for="exampleInputpasswordcrf">* Confirmation of password</label>
													<input type="password" class="form-control"  value="12345678" id="exampleInputpasswordcrf" aria-describedby="passwordcrfHelp" placeholder="">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="exampleFormControlInput1">* Numéro de Téléphone (cabinet)</label>
													<input type="tel"  class="form-control" name="phone_no" id="phone_no"  value="{{$user->phone_no}}" >
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
	