@extends('layouts.admin_layout')
@section('admin_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    Add City
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 offset-1">
                            <form action="{{URL::to('/save_city')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label"> City Name</label>
                                    <input type="text" id="city" name="city" class="form-control" >
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