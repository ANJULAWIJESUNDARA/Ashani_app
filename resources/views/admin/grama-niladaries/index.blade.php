@extends('admin.home')
@section('title' , 'Index')
@section('content')
<div class="page-content-wrapper">
      <!-- start page content-->
      <br>
      <h6 class="mb-0 text-uppercase"> &nbsp; Former Grama Niladaries List </h6>
      <div class="card">
        <div class="card-body">
            <span style="float: right;">
          <a href="{{route('former-gn.create')}}">
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
                              <th>Index</th>
                              <th>Name</th>
                              <th>Date</th>
                              <th>Type</th>
                              <th>Is Relocation</th>



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
        ajax: "{{ url('/former-gn') }}",
        columnDefs: [{
            "targets": [5],
            "orderable": false,
            "searchable": false,

        }],

        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'service_time',
                name: 'service_time'
            },
            {
                data: 'type',
                name: 'type'
            },

            {
                data: 'is_relocation',
                name: 'is_relocation'
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
