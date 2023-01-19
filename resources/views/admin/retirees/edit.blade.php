@extends('admin.home')
@section('title' , 'Edit Retirees Info')
@section('content')
    <div class="page-content-wrapper">
        <!-- start page content-->
        <!-- start page content-->
        <div class="page-content">

            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Edit RETIREES INFO</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('retirees.update' , $info->id)}}">
                                    @method('PUT')

                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">House No</label>
                                        <input type="number" class="form-control" value="{{$info->house_no}}" name="house_no" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" value="{{$info->full_name}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$info->address}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Contact No</label>
                                        <input type="text" class="form-control" name="contact_no" value="{{$info->contact_no}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">NIC</label>
                                        <input type="text" class="form-control" name="nic" value="{{$info->nic}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Pension Number</label>
                                        <input type="text" class="form-control" name="pension_number" value="{{$info->pension_number}}" required>
                                    </div>



                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end page content wrapper-->
@endsection
