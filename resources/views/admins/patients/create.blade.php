@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-light">
					Add Patient
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8 offset-1">
							<form action="{{URL::to('/save_patient')}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="form-group">
									<label for="first_name" class="form-control-label"> First Name</label>
									<input type="text" id="first_name" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" >
									 @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                     @endif
								</div>

								<div class="form-group">
									<label for="last_name" class="form-control-label"> Last Name</label>
									<input type="text" id="last_name" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" >
									 @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                     @endif
								</div>

								<div class="form-group">
									<label for="email" class="form-control-label"> Email</label>
									<input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" >
									 @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                     @endif
								</div>

								<div class="form-group">		
									<input type="hidden" id="user_type" name="user_type" class="form-control" value="patient" >
								</div>


								<div class="form-group">
									<label for="single-select">Country</label>
									<select name="country_id" id="country_id" class="form-control{{ $errors->has('country_id') ? ' is-invalid' : '' }}">

										<option>Select Here..</option>
										@foreach ($countries as $country) 

										<option value="{{ $country->id }}" @if (old('country_id') == $country->id) selected="selected" @endif>{{ $country->country_name }}</option>

										@endforeach

									</select>
									 @if ($errors->has('country_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('country_id') }}</strong>
                                            </span>
                                     @endif
								</div>

								<div class="form-group">
									<label for="phone_no" class="form-control-label"> Phone</label>
									<input type="text" id="phone_no" name="phone_no" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" >
									 @if ($errors->has('phone_no'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone_no') }}</strong>
                                            </span>
                                     @endif
								</div>

								<div class="form-group">
									<label for="password" class="form-control-label"> Password</label>
									<input type="password" id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" >
									 @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                     @endif
								</div>

								<div class="form-group">
									<label for="password-confirm" class="form-control-label"> Confirm Password</label>
									<input type="password" id="password-confirm" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" required>
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