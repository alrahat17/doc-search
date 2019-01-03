@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Patients Table
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="patients_table" class="table table-bordered data-table dataTable">
                                    <thead>
                                    <tr>
                                     
                                        <th>First Name</th>
                                        <th>Family Name</th>
                                        <th>Email</th>
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
        $('#patients_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('get.patients') !!}',
            
            
 columns: 
        [        
          
          { data: 'first_name', name: 'first_name' },
            
          { data: 'family_name', name: 'family_name' },
          { data: 'email', name: 'email' },
          { data: 'phone_no', name: 'phone_no' },
          {data:'status',data:'status'},
          { data: 'action', name: 'action' }, 
          
             
        ],

  
 
 
      });
    });


</script>

@endsection