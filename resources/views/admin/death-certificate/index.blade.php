@extends('admin.home')
@section('title' , 'Index')
@section('content')
<div class="page-content-wrapper">
      <!-- start page content-->
      <br>
      <h6 class="mb-0 text-uppercase"> &nbsp; Death Certificate </h6>
      <div class="card">
        <div class="card-body">
            <span style="float: right;">
          <a href="{{route('death-certificate.create')}}">
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
                              <th>Index No</th>
                              <th>Name Of Deacesed</th>
                              <th>Date</th>
                              <th>Informer</th>

                              <th>Cause</th>

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
        ajax: "{{ url('/death-certificate') }}",
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
                data: 'deceased_name',
                name: 'deceased_name'
            },
            {
                data: 'dead_date',
                name: 'dead_date'
            },
            {
                data: 'informers_name',
                name: 'informers_name'
            },

            {
                data: 'cause',
                name: 'cause'
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
