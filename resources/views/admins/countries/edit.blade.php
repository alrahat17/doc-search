@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Add Country
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 offset-1">
                            <form action="{{URL::to('/countries',$country->id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                  {{method_field('PUT')}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label"> Country Name</label>
                                    <input type="text" id="country_name" name="country_name" class="form-control" value="{{$country->country_name}}" >
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