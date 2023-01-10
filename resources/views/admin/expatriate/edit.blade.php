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
                                <h6 class="mb-0 text-uppercase">expatriates Details</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('expatriate.update' , [$expatriate->id])}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Expatriate Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$expatriate->name}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Depature Date</label>
                                        <input type="date" class="form-control" name="depature_date" value="{{$expatriate->depature_date}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">NIC</label>
                                        <input type="text" class="form-control" name="nic" value="{{$expatriate->nic}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Passport No</label>
                                        <input type="text" class="form-control" name="passport_no" value="{{$expatriate->passport_no}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">House No</label>
                                        <input type="text" class="form-control" name="house_no" value="{{$expatriate->house_no}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Country</label>
                                        <input type="text" class="form-control" name="country" value="{{$expatriate->country}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Reason</label>

                                        <textarea name="reason" id="" class="form-control" cols="30" rows="4">value="{{$expatriate->reason}}"</textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Is Dual Citizenship</label>
                                     <select name="is_dual_citizen" class="form-control" id="">
                                        @if ($expatriate->is_dual_citizen == 'no')
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                        @else

                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
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
