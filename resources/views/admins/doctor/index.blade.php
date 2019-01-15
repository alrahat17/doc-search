@extends('layouts.admin_layout')
@section('admin_content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-light">
                Doctors Table
            </div>
            <div class="card-body">
                <table id="doctor_table" class="table table-responsive table-bordered data-table dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Specialty</th>
                                <th>Number (cabinet)</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    
    $(function() {
    $('#doctor_table').DataTable({
    processing: true,
    serverSide: true,
    ajax: '{!! route('get.doctors') !!}',
    
    
    columns:
    [   
        
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'city_id',name:'city_id'},
        { data: 'address', name: 'address' },
        { data: 'specialty_id', name: 'specialty_id' },
        { data: 'phone_no', name: 'phone_no' },    
        { data: 'phone_portable', name: 'phone_portable' },
        { data: 'status', name: 'status' },
        { data: 'action', name: 'action' },
    
    ],
    
    });
    });
    </script>
@endsection