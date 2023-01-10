@extends('admin.home')
@section('title' , 'Edit Former Grama Niladaries')
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
                                <h6 class="mb-0 text-uppercase">Edit  Former Grama Niladaries</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('former-gn.update', [$former->id])}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Name </label>
                                        <input type="text" class="form-control" name="name" value="{{$former->name}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Date </label>
                                        <input type="date" class="form-control" name="service_time" {{$former->service_time}} required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Type</label>
                                        <select name="type" id="type" class="form-control">
                                            @if($former->type == 'acting')
                                            <option value="acting">Acting</option>
                                            <option value="permanent">Permenent</option>
                                            @else
                                            <option value="permanent">Permenent</option>
                                            <option value="acting">Acting</option>


                                            @endif

                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Is Relocation Or Retierment</label>
                                        <select name="is_relocation" id="" class="form-control">
                                            @if ($former->is_relocation == 'is_relocation')
                                            <option value="relocation">Relocation</option>
                                            <option value="retierment">Retirement</option>
                                            @else

                                            <option value="retierment">Retirement</option>
                                            <option value="relocation">Relocation</option>


                                            @endif

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
