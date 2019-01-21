@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">
                Country Table
                <a class="create_category" href="{{URL::to('add_city')}}">
                 <button class="btn btn-primary float-right">Add City</button>
             </a>
         </div>

         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>City Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cities as $key => $city )
                        <tr>
                            <td>{{$key +1}}</td>
                            <td class="text-nowrap">{{$city->city}}</td>
                            <td>
                             @if ($city->status==1)
                               <span class="label label-success" style="color:green; font-weight:bold;">Active</span>
                               @else
                               <span class="label label-warning" style="color:red; font-weight:bold;">Inactive</span>
                            @endif
                            </td>
                            <td>
                            @if ($city->status==1)
                            <a href="{{URL::to('/deactive_city/'.$city->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> </a>
                            @else
                            <a href="{{URL::to('/active_city/'.$city->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i> </a>
                            @endif           
                            <a href="{{URL::to('/edit_city/'.$city->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                            {{-- <form method="post" action="{{ route('countries.destroy',$country->id) }}"
                                @csrf
                                @method('delete')

                                <a class="btn btn-danger btn-sm" href="{{'/countries/'.$country->id}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </form>   
 --}}
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