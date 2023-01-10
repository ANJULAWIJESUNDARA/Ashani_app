@extends('admin.home')
@section('title' , 'Index')
@section('content')
<div class="page-content-wrapper">
      <!-- start page content-->
      <br>
      <h6 class="mb-0 text-uppercase"> &nbsp; Information document on retirees </h6>
      <div class="card">
        <div class="card-body">
            <span style="float: right;">
          <a href="{{route('retirees.create')}}">
        <button type="button"  class="btn btn-success px-5">Add</button></a>
    </span>
      </div>
      </div>
      <hr/>
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="info_retirees_table" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>House Number</th>
                              <th>Full Name</th>
                              <th>Address</th>

                              <th>Contact</th>
                              <th>NIC</th>
                              <th>Pension Number</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody id="">


                      </tbody>

                  </table>
              </div>
          </div>
      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->
@endsection
@section('scripts')
<script>
$(document).ready(function () {

    var table = $('#info_retirees_table').DataTable({

        processing: false,
        serverSide: true,
        ajax: "{{ url('/retirees') }}",
        columnDefs: [{
            "targets": [7],
            "orderable": false,
            "searchable": false,

        }],

        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'house_no',
                name: 'house_no'
            },
            {
                data: 'full_name',
                name: 'full_name'
            },
            {
                data: 'address',
                name: 'address'
            },

            {
                data: 'contact_no',
                name: 'contact_no'
            },

            {
                data: 'nic',
                name: 'nic'
            },

            {
                data: 'pension_number',
                name: 'pension_number'
            },
            {
                data: 'action',
                name: 'action'
            }
        ]
    });
});
</script>
@endsection
