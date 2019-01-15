@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-light">
					Edit Specialty
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8 offset-1">
							<form action="{{URL::to('/specialties',$specialty->id)}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
								{{method_field('PUT')}}
								<div class="form-group">
									<label for="title" class="form-control-label"> Specialty Name</label>
									<input type="text" id="spcl_name" name="spcl_name" class="form-control" value="{{$specialty->spcl_name}}">
								</div>

								<div class="form-group">
									<label for="textarea">Description</label>
									<textarea id="textarea" id="spcl_des" name="spcl_des" class="form-control" rows="6">{{$specialty->spcl_des}}</textarea>
								</div>

								<div class="form-group">
									<label for="single-select">Category</label>
									<select name="category_id" id="category_id" class="form-control">

										<option>Select Here..</option>
										@foreach ($categories as $category) 

										<option value="{{$category->id}}"<?php if($category->id == $specialty->category_id) echo "selected" ;?>>{{$category->cat_name}}</option>

										@endforeach

									</select>
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