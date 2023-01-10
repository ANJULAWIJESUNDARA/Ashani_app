@extends('admin.home')
@section('title' , 'Index')
@section('content')
<div class="page-content-wrapper">
      <!-- start page content-->
      <br>
      <h6 class="mb-0 text-uppercase"> &nbsp; Information Cash Reciept </h6>
      <div class="card">
        <div class="card-body">
            <span style="float: right;">
          <a href="{{route('cash-reciept.create')}}">
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
                              <th>Date</th>
                              <th>Reciept Name</th>
                              <th>Reciept Number</th>

                              <th>Paid By</th>
                              <th>Reason</th>
                              <th>Amount</th>
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
        ajax: "{{ url('/cash-reciept') }}",
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
                data: 'date',
                name: 'date'
            },
            {
                data: 'reciept_name',
                name: 'reciept_name'
            },
            {
                data: 'reciept_number',
                name: 'reciept_number'
            },

            {
                data: 'paid_by',
                name: 'paid_by'
            },

            {
                data: 'reason',
                name: 'reason'
            },

            {
                data: 'amount',
                name: 'amount'
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
