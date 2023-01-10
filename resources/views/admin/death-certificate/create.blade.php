@extends('admin.home')
@section('title' , 'Create Death Certificaate')
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
                                <h6 class="mb-0 text-uppercase">Add Death Certicate</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('death-certificate.store')}}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Name Of Deceased</label>
                                        <input type="text" class="form-control" name="deceased_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Date of Death</label>
                                        <input type="date" class="form-control" name="dead_date" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Informer's Name</label>
                                        <input type="text" class="form-control" name="informers_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Cause Of Death</label>
                                        <textarea name="cause" class="form-control" id="" cols="30" rows="4"></textarea>
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
