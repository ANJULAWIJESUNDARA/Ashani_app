@extends('admin.home')
@section('title' , 'Search')
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
                                <h6 class="mb-0 text-uppercase">Search</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('search.store')}}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Search By Name</label>
                                        <input type="text" class="form-control" name="house_no" required>
                                    </div>




                                    <div class="col-4">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
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
