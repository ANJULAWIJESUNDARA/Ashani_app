@extends('admin.home')
@section('title' , 'Index')
@section('content')
<div class="page-content-wrapper">
      <!-- start page content-->
      <br>
      <h6 class="mb-0 text-uppercase"> &nbsp; Document of issuance of income certificates </h6>
      <div class="card">
        <div class="card-body">
            <span style="float: right;">
          <a href="{{route('income-certificate.create')}}">
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

                              <th>Full Name</th>
                              <th>Date</th>
                              <th>Address</th>

                              <th>Contact</th>
                              <th>Path Of Income</th>
                              <th>Annual Income</th>
                              <th>Monthly Income</th>
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
        ajax: "{{ url('/income-certificate') }}",
        columnDefs: [{
            "targets": [8],
            "orderable": false,
            "searchable": false,

        }],

        columns: [{
                data: 'id',
                name: 'id'
            },

            {
                data: 'full_name',
                name: 'full_name'
            },
            {
                data: 'date',
                name: 'date'
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
                data: 'path_of_income',
                name: 'path_of_income'
            },

            {
                data: 'annual_income',
                name: 'annual_income'
            },
            {
                data: 'monthly_income',
                name: 'monthly_income'
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
