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
                                <form class="row g-3" method="POST" action="{{route('packages.update' , [$Package->id])}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label"> Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$Package->name}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Basic Price</label>
                                        <input type="text" class="form-control" name="basic_price"value="{{$Package->basic_price}}"   required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Regular Price</label>
                                        <input type="text" class="form-control" name="regular_price" value="{{$Package->regular_price}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Premium Price</label>
                                        <input type="text" class="form-control" name="premium_price"value="{{$Package->premium_price}}"  required>
                                    </div>


                                    <div class="col-12">
                                        <label class="form-label">Additional Information</label>
                                        <textarea class="form-control" rows="4" cols="4" name="description" value="" >{{$Package->description}}</textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check d-flex justify-content-center gap-2">
                                            <input class="form-check-input" type="checkbox" name="is_active" id="gridCheck3-c" checked="">
                                            <label class="form-check-label" for="gridCheck3-c">
                                               Is Active
                                            </label>
                                        </div>
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
