@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-light">
					Edit Patient
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8 offset-1">
							<form action="{{url('/update_patient',$patient->id)}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="form-group">
									<label for="first_name" class="form-control-label"> First Name</label>
									<input type="text" id="first_name" name="first_name" class="form-control" value="{{$patient->first_name}}" >
								</div>

								<div class="form-group">
									<label for="family_name" class="form-control-label"> Family Name</label>
									<input type="text" id="family_name" name="family_name" class="form-control" value="{{$patient->family_name}}" >
								</div>

								<div class="form-group">
									<label for="email" class="form-control-label"> Email</label>
									<input type="email" id="email" name="email" class="form-control" value="{{$patient->email}}" >
								</div>

						
								<div class="form-group">
									<label for="single-select">Country</label>
									<select name="country_id" id="country_id" class="form-control">

										<option>Select Here..</option>
										@foreach ($countries as $country) 

										<option value="{{$country->id}}"<?php if($country->id == $patient->country_id) echo "selected" ;?>>{{$country->country_name}}</option>

										@endforeach

									</select>
								</div>

								<div class="form-group">
									<label for="phone_no" class="form-control-label"> Phone</label>
									<input type="text" id="phone_no" name="phone_no" class="form-control" value="{{$patient->phone_no}}" >
								</div>

								<div class="form-group">
									<label for="password" class="form-control-label"> Password</label>
									<input type="password" id="password" name="password" class="form-control" >
								</div>

								<div class="form-group">
									<label for="password-confirm" class="form-control-label"> Confirm Password</label>
									<input type="password" id="password-confirm" name="password_confirmation" class="form-control" >
								</div>



								<div class="form-group">
									<div class="mb-4">                 
										<button type="submit" class="btn btn-primary">Submit</button>
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
@endsection