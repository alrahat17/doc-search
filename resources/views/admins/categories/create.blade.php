@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Add Category
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 offset-1">
                                <form action="/categories" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label"> Category Name</label>
                                    <input type="text" id="cat_name" name="cat_name" class="form-control" placeholder="Enter the title">
                                </div>
                                
                                <div class="form-group">
                                    <label for="textarea">Description</label>
                                    <textarea id="textarea" id="cat_des" name="cat_des" class="form-control" rows="6"></textarea>
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