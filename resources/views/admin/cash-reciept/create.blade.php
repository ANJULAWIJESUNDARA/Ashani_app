@extends('admin.home')
@section('title' , 'Create Cash Reciept')
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
                                <h6 class="mb-0 text-uppercase">Add Cash Reciept</h6>
                                <hr>
                                <form class="row g-3" method="POST" action="{{route('cash-reciept.store')}}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Reciept Name</label>
                                        <input type="text" class="form-control" name="reciept_name" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Reciept Number</label>
                                        <input type="text" class="form-control" name="reciept_number" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Paid By</label>
                                        <input type="text" class="form-control" name="paid_by" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Reason</label>
                                       
                                        <textarea name="reason" id="" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Amount</label>
                                        <input type="number" class="form-control" name="amount" required>
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
