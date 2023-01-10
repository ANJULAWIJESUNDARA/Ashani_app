@extends('admin.home')
@section('title' , 'Create issuance of income certificates')
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
                                <h6 class="mb-0 text-uppercase">Add issuance of income certificates</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('income-certificate.store')}}">
                                    @csrf

                                    <div class="col-12">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date" required>
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
                                        <label class="form-label">Path of Income</label>
                                        <input type="text" class="form-control" name="path_of_income" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Monthly Income</label>
                                        <input type="text" class="form-control" name="monthly_income" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Annual Income</label>
                                        <input type="text" class="form-control" name="annual_income" required>
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
