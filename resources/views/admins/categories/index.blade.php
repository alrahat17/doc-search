@extends('layouts.admin_layout')
@section('admin_content')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery.js"></script>

<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Categories Table
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-bordered data-table dataTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
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
                                        <td>{{$category->cat_des}}</td>
                                        <td>{{$category->status}}</td>
                                        <td>Action</td>
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