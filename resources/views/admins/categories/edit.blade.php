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
                            <form action="{{URL::to('categories',$category->id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                  {{method_field('PUT')}}

                                <div class="form-group">
                                    <label for="title" class="form-control-label"> Category Name</label>
                                    <input type="text" id="cat_name" name="cat_name" class="form-control" value="{{$category->cat_name}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="textarea">Description</label>
                                    <textarea id="textarea" id="cat_des" name="cat_des" class="form-control" rows="6">{{$category->cat_des}}</textarea>
                                </div>

                                 <div class="form-group-file">
                                    <label for="cat_img" class="form-control-label"> Category Image</label>
                                    <input type="file" id="cat_img" name="cat_img" class="form-control-file" >
                                    <br>
                                    <img style="height: 90px;width: 120px;" src="{{URL::to($category->cat_img)}}" >
                                    <br>
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