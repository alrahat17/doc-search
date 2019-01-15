@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">
                Specialty Table
                <a class="create_category" href="{{URL::to('specialties/create')}}">
                    <button class="btn btn-primary float-right">Add Specialty</button>
             </a>
         </div>

         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Specialty</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($specialties as $key => $specialty )
                        <tr>
                            <td>{{$key +1}}</td>
                            <td class="text-nowrap">{{$specialty->spcl_name}}</td>
                            <td>{{$specialty->spcl_des}}</td>
                            <td>{{$specialty->category->cat_name}}</td>
                            <td>
                                @if ($specialty->status==1)
                                <span class="label label-success" style="color:green; font-weight:bold;">Active</span>
                                @else
                                <span class="label label-warning" style="color:red; font-weight:bold;">Inactive</span>
                                @endif

                            </td>
                            <td>
                                @if ($specialty->status==1)
                                <a href="{{URL::to('/deactive_specialty/'.$specialty->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> </a>
                                @else
                                <a href="{{URL::to('/active_specialty/'.$specialty->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i> </a>
                                @endif           
                                <a href="{{URL::to('/specialties/'.$specialty->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                                <form method="post" action="{{ route('specialties.destroy',$specialty->id) }}">
                                @csrf
                                @method('delete')

                            <a class="delete" href="{{'/specialties/'.$specialty->id}}">
                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></button>
                            </a>
                            </form>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection