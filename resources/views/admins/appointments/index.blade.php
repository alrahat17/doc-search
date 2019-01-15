@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header bg-light">
        Appointments Table
        <a class="create_category" href="{{URL::to('add_appointment')}}">
         <button class="btn btn-primary float-right">Add Appointment</button>
       </a>
       
     </div>

     <div class="card-body">
      <div class="table-responsive">
        <table id="appointments_table" class="table table-bordered data-table dataTable">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Age</th>
              <th>Phone</th>
              <th>Doctor Name</th>
              <th>Date</th>
              <th>Time</th> 
              <th>isBooked</th>        
              
              
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
    $('#appointments_table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{!! route('get.appointments') !!}',
      
      
      columns: 
      [        
      
      { data: 'first_name', name: 'first_name' },
      
      { data: 'last_name', name: 'last_name' },
      { data: 'email', name: 'email' },
      { data: 'age', name: 'age' },
      { data: 'contact_no', name: 'contact_no' },
      { data: 'doctor_id', name: 'doctor_id' },
      { data: 'app_date', name: 'app_date' },
      { data: 'app_time', name: 'app_time' },

      {data:'isBooked',data:'isBooked'},
      
          //{data:'test',data:'test'},
          
          
          ],

          
          
          
        });
  });


</script>

@endsection