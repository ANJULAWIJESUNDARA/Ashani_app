@extends('admin.home')
@section('title' , 'Create Retirees Info')
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
                                <h6 class="mb-0 text-uppercase">Add Security Officer  Details</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('security-officer.store')}}">
                                    @csrf

                                    <div class="col-12">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Contact No</label>
                                        <input type="text" class="form-control" name="contact_no" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">NIC</label>
                                        <input type="text" class="form-control" name="nic" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Department</label>
                                        <input type="text" class="form-control" name="department" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Service Number </label>
                                        <input type="text" class="form-control" name="service_number" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Rank</label>
                                        <input type="text" class="form-control" name="rank" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Service Duration (Months)</label>
                                        <input type="text" class="form-control" name="duration" required>
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
