@extends('admin.home')
@section('title' , 'Inquireis')
@section('content')
<div class="page-content-wrapper">
      <!-- start page content-->
      <br>
      <h6 class="mb-0 text-uppercase"> &nbsp; Inquireis </h6>
      <div class="card">
        {{-- <div class="card-body">
            <span style="float: right;">
          <a href="{{route('expatriate.create')}}">
        <button type="button"  class="btn btn-success px-5">Add</button></a>
    </span>
      </div> --}}
      </div>
      <hr/>
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table id="inquireis" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Message</th>
                              <th>Is Responded</th>

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

    var table = $('#inquireis').DataTable({

        processing: false,
        serverSide: true,
        ajax: "{{ url('/inquiries') }}",
        columnDefs: [{
            "targets": [5],
            "orderable": false,
            "searchable": false,

        }],

        columns: [{
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'mobile',
                name: 'mobile'
            },
            {
                data: 'message',
                name: 'message'
            },
            {
                data: 'is_responded',
                name: 'is_responded'
            },

            {
                data: 'action',
                name: 'action'
            },


        ]
    });
});
</script>
@endsection
