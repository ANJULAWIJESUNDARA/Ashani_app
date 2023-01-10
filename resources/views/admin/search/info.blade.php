@extends('admin.home')
@section('title', 'Search')
@section('content')
    <div class="page-content-wrapper">
        <!-- start page content-->
        <!-- start page content-->
        <div class="page-content">

            <div class="row">
                <div class="col-xl-8 mx-auto">
                    @if ($death_certifactes->count()!= 0)


                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase"> &nbsp;Document Of issue Death Certificate </h6>
                            <div class="table-responsive">
                                <table id="info_retirees_table" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Created At</th>
                                            <th>Name Of Deacesed</th>
                                            <th>Date</th>
                                            <th>Informer</th>

                                            <th>Cause</th>

                                        </tr>
                                    </thead>
                                    @foreach ($death_certifactes as $death_certificate)

                                        <tbody id="">
                                            <td>{{ $death_certificate->created_at }}</td>
                                            <td>{{ $death_certificate->deceased_name }}</td>
                                            <td>{{ $death_certificate->dead_date }}</td>
                                            <td>{{ $death_certificate->informers_name }}</td>
                                            <td>{{ $death_certificate->cause }}</td>

                                        </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>

                    </div>
                    @endif
                    @if ($expatriates->count()!= 0)

                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase"> &nbsp;Document Of Expatriate </h6>

                            <h6 class="mb-0 text-uppercase"> &nbsp; </h6>
                            <div class="table-responsive">
                                <table id="info_retirees_table" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Created At</th>
                                            <th>Name</th>
                                            <th>House No</th>
                                            <th>Depature Date</th>
                                            <th>NIC</th>
                                            <th>Passport No</th>
                                            <th>Country</th>
                                            <th>Reason</th>
                                            <th>Is Dual Citizenship</th>

                                        </tr>
                                    </thead>
                                    <tbody id="">
                                        @foreach ($expatriates as $expatriate)
                                            <tr>
                                                <td>{{ $expatriate->created_at }}</td>
                                                <td>{{ $expatriate->name }}</td>
                                                <td>{{ $expatriate->house_no }}</td>
                                                <td>{{ $expatriate->depature_date }}</td>
                                                <td>{{ $expatriate->nic }}</td>
                                                <td>{{ $expatriate->passport_no }}</td>
                                                <td>{{ $expatriate->country }}</td>
                                                <td>{{ $expatriate->reason }}</td>
                                                <td>{{ $expatriate->is_dual_citizen }}</td>

                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($former_g_n_s->count()!= 0)


                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase"> &nbsp; FORMER GRAMA NILADARIES </h6>

                            <div class="table-responsive">
                                <table id="info_retirees_table" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Created At</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Is Relocation</th>



                                        </tr>
                                    </thead>
                                    <tbody id="">
                                        @foreach ($former_g_n_s as $former_g_n)
                                            <tr>
                                                <td>{{ $former_g_n->created_at }}</td>
                                                <td>{{ $former_g_n->name }}</td>
                                                <td>{{ $former_g_n->date }}</td>
                                                <td>{{ $former_g_n->type }}</td>
                                                <td>{{ $former_g_n->is_relocation }}</td>

                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($income_certificates->count()!= 0)


                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase"> &nbsp; Income Certificates </h6>

                            <div class="table-responsive">
                                <table id="info_retirees_table" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>

                                            <th>Full Name</th>
                                            <th>Date</th>
                                            <th>Address</th>

                                            <th>Contact</th>
                                            <th>Path Of Income</th>
                                            <th>Annual Income</th>
                                            <th>Monthly Income</th>



                                        </tr>
                                    </thead>
                                    <tbody id="">
                                        @foreach ($income_certificates as $income_certificate)
                                            <tr>
                                                <td>{{ $income_certificate->created_at }}</td>
                                                <td>{{ $income_certificate->full_name }}</td>
                                                <td>{{ $income_certificate->date }}</td>
                                                <td>{{ $income_certificate->address }}</td>
                                                <td>{{ $income_certificate->contact_no }}</td>
                                                <td>{{ $income_certificate->path_of_income }}</td>
                                                <td>{{ $income_certificate->annual_income }}</td>
                                                <td>{{ $income_certificate->monthly_income }}</td>

                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($inquireis->count()!= 0)


                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase"> &nbsp; Inquireis</h6>

                            <div class="table-responsive">
                                <table id="info_retirees_table" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Created At</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Message</th>
                                            <th>Is Responded</th>


                                        </tr>
                                    </thead>
                                    <tbody id="">
                                        @foreach ($inquireis as $inquiry)
                                            <tr>
                                                <td>{{ $inquiry->created_at }}</td>
                                                <td>{{ $inquiry->name }}</td>
                                                <td>{{ $inquiry->email }}</td>
                                                <td>{{ $inquiry->mobile }}</td>
                                                <td>{{ $inquiry->message }}</td>
                                                <td>{{ $inquiry->is_responded }}</td>


                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($retirees->count()!= 0)


                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase"> &nbsp; Retirees</h6>

                            <div class="table-responsive">
                                <table id="info_retirees_table" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Created At</th>

                                            <th>House Number</th>
                                            <th>Full Name</th>
                                            <th>Address</th>

                                            <th>Contact</th>
                                            <th>NIC</th>
                                            <th>Pension Number</th>


                                        </tr>
                                    </thead>
                                    <tbody id="">
                                        @foreach ($retirees as $inquiry)
                                            <tr>
                                                <td>{{ $inquiry->created_at }}</td>
                                                <td>{{ $inquiry->house_no }}</td>
                                                <td>{{ $inquiry->full_name }}</td>
                                                <td>{{ $inquiry->address }}</td>
                                                <td>{{ $inquiry->contact_no }}</td>
                                                <td>{{ $inquiry->nic }}</td>
                                                <td>{{ $inquiry->pension_number }}</td>

                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    @endif


                </div>
            </div>
            </div>
        </div>
    </div>
    <!--end page content wrapper-->
@endsection
