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
                            <form action="{{URL::to('categories')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label"> Category Name</label>
                                    <input type="text" id="cat_name" name="cat_name" class="form-control{{ $errors->has('cat_name') ? ' is-invalid' : '' }}">
                                     @if ($errors->has('cat_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cat_name') }}</strong>
                                            </span>
                                     @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="textarea">Description</label>
                                    <textarea id="textarea" id="cat_des" name="cat_des" class="form-control{{ $errors->has('cat_des') ? ' is-invalid' : '' }}" rows="6"></textarea>
                                     @if ($errors->has('cat_des'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cat_des') }}</strong>
                                            </span>
                                     @endif
                                </div>

                                <div class="form-group-file">
                                    <label for="cat_img" class="form-control-label"> Category Image</label>
                                    <input type="file" id="cat_img" name="cat_img" class="form-control-file{{ $errors->has('cat_img') ? ' is-invalid' : '' }}" >
                                     @if ($errors->has('cat_img'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('cat_img') }}</strong>
                                            </span>
                                      @endif
                                </div>
                                <div class="form-group"></div>
                                
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