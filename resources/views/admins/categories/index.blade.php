@extends('layouts.admin_layout')
@section('admin_content')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">
                Categories Table
                <a class="create_category" href="{{URL::to('categories/create')}}">
                 <button class="btn btn-primary float-right">Add Category</button>
             </a>
         </div>

         <div class="card-body">
            <div class="table-responsive">
                <table id="table_id" class="table table-bordered data-table dataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $key => $category )
                        <tr>
                            <td>{{$key +1}}</td>
                            <td class="text-nowrap">{{$category->cat_name}}</td>
                            <td><img style="height:45px;width: 60px;" src="{{$category->cat_img}}" /></td>
                            <td>{{$category->cat_des}}</td>
                            <td>
                               @if ($category->status==1)
                               <span class="label label-success" style="color:green; font-weight:bold;">Active</span>
                               @else
                               <span class="label label-warning" style="color:red; font-weight:bold;">Inactive</span>

                               @endif

                           </td>
                           <td>
                            @if ($category->status==1)
                            <a href="{{URL::to('/deactive_category/'.$category->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> </a>
                            @else
                            <a href="{{URL::to('/active_category/'.$category->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i> </a>
                            @endif           
                            <a href="{{URL::to('/categories/'.$category->id.'/edit')}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                            <form method="post" action="{{ route('categories.destroy',$category->id) }}">
                                @csrf
                                @method('delete')

                            <a class="delete" href="{{'/categories/'.$category->id}}">
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



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
     $('#table_id').DataTable();
 } );
</script>

</script>

@endsection