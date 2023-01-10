@extends('admin.home')
@section('title' , 'Edit')
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
                                <h6 class="mb-0 text-uppercase">Packages</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('private-sector.update' , [$private_sector_employee->id])}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" value="{{$private_sector_employee->full_name}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$private_sector_employee->address}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Contact No</label>
                                        <input type="text" class="form-control" name="contact_no" value="{{$private_sector_employee->contact_no}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">NIC</label>
                                        <input type="text" class="form-control" name="nic" value="{{$private_sector_employee->nic}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Occupation</label>
                                        <input type="text" class="form-control" name="occupation" value="{{$private_sector_employee->occupation}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Company Name </label>
                                        <input type="text" class="form-control" name="company" value="{{$private_sector_employee->company}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="designation" value="{{$private_sector_employee->designation}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Service Duration (Months)</label>
                                        <input type="text" class="form-control" name="duration" value="{{$private_sector_employee->duration}}" required>
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
