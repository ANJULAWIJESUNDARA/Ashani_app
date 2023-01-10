@extends('admin.home')
@section('title' , 'Index')
@section('content')
<div class="page-content-wrapper">
      <!-- start page content-->
      <br>
      <h6 class="mb-0 text-uppercase"> &nbsp; Document Of Exptriates Details </h6>
      <div class="card">
        <div class="card-body">
            <span style="float: right;">
          <a href="{{route('expatriate.create')}}">
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
                              <th>Name</th>
                              <th>House No</th>
                              <th>Depature Date</th>
                              <th>NIC</th>
                              <th>Passport No</th>
                              <th>Country</th>
                              <th>Reason</th>
                              <th>Is Dual Citizenship</th>
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
        ajax: "{{ url('/expatriate') }}",
        columnDefs: [{
            "targets": [8],
            "orderable": false,
            "searchable": false,

        }],

        columns: [{
                data: 'name',
                name: 'name'
            },
            {
                data: 'house_no',
                name: 'house_no'
            },
            {
                data: 'depature_date',
                name: 'depature_date'
            },

            {
                data: 'nic',
                name: 'nic'
            },

            {
                data: 'passport_no',
                name: 'passport_no'
            },

            {
                data: 'country',
                name: 'country'
            },

            {
                data: 'reason',
                name: 'reason'
            },
            {
                data: 'is_dual_citizen',
                name: 'is_dual_citizen'
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
