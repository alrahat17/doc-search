@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-light">
					Add Specialty
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8 offset-1">
							<form action="{{URL::to('/specialties')}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="form-group">
									<label for="title" class="form-control-label"> Specialty Name</label>
									<input type="text" id="spcl_name" name="spcl_name" class="form-control">
								</div>

								<div class="form-group">
									<label for="textarea">Description</label>
									<textarea id="textarea" id="spcl_des" name="spcl_des" class="form-control" rows="6"></textarea>
								</div>

								<div class="form-group">
									<label for="single-select">Category</label>
									<select name="category_id" id="category_id" class="form-control">

										<option>Select Here..</option>
										@foreach ($categories as $category) 

										<option value="{{ $category->id }}" @if (old('category_id') == $category->id) selected="selected" @endif>{{ $category->cat_name }}</option>

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