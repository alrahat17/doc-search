@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-light">
					Add Appointment
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8 offset-1">
							<form action="{{URL::to('save_appointment')}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="form-group">
									<label for="first_name" class="form-control-label"> First Name</label>
									<input type="text" id="first_name" name="first_name" class="form-control" >
								</div>

								<div class="form-group">
									<label for="last_name" class="form-control-label"> Last Name</label>
									<input type="text" id="last_name" name="last_name" class="form-control" >
								</div>

								<div class="form-group">
									<label for="email" class="form-control-label"> Email</label>
									<input type="email" id="email" name="email" class="form-control" >
								</div>

								<div class="form-group">
									<label for="age" class="form-control-label"> Age</label>
									<input type="number" id="age" name="age" class="form-control" >
								</div>

								
								

								<div class="form-group">
									<label for="phone_no" class="form-control-label"> Phone</label>
									<input type="text" id="phone_no" name="phone_no" class="form-control" >
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