@extends('admin.home')
@section('title' , 'Create Former Grama Niladaries')
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
                                <h6 class="mb-0 text-uppercase">Add  Former Grama Niladaries</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('former-gn.store')}}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Name </label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Date </label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Type</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="acting">Acting</option>
                                            <option value="permanent">Permenent</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Is Relocation Or Retierment</label>
                                        <select name="is_relocation" id="" class="form-control">
                                            <option value="relocation">Relocation</option>
                                            <option value="retierment">Retirement</option>
                                        </select>


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
