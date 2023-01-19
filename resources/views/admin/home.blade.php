<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/pace.min.js')}}"></script>

    <!--plugins-->
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"/>


    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="{{asset('assets/css/dark-theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/semi-dark.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/header-colors.css')}}" rel="stylesheet"/>

    <title>@yield('title')</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{asset('assets/images/logo-icon-2.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Admin CP</h4>
            </div>
            <div class="toggle-icon ms-auto">
                <ion-icon name="menu-sharp"></ion-icon>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            {{-- <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                  <ion-icon name="home-sharp"></ion-icon>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
              <ul>
                <li> <a href="index.html">
                    <ion-icon name="ellipse-outline"></ion-icon>Default
                  </a>
                </li>
                <li> <a href="index2.html">
                    <ion-icon name="ellipse-outline"></ion-icon>Alternate
                  </a>
                </li>
              </ul>
            </li>
     --}}
            <li>
                <a href="{{route('inquiries.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Inquireis</div>
                </a>
            </li>

            <li>
                <a href="{{route('retirees.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Retirees Info</div>
                </a>
            </li>
            <li>
                <a href="{{route('income-certificate.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Issuance of Income Certificates</div>
                </a>
            </li>

            <li>

                <a href="{{route('death-certificate.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Document Of Issue Death Certificate</div>
                </a>
            </li>

            <li>

                <a href="{{route('cash-reciept.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Document Of Cash Reciept</div>
                </a>
            </li>
            <li>

                <a href="{{route('expatriate.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Document Of Expatriate Details</div>
                </a>
            </li>
            <li>

                <a href="{{route('former-gn.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Details About Former Gramaniladaries</div>
                </a>
            </li>

            <li>

                <a href="{{route('private-sector.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Private Sector Employees Details</div>
                </a>
            </li>
            <li>

                <a href="{{route('security-officer.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Security Officer Details</div>
                </a>
            </li>
            <li>

                <a href="{{route('search.index')}}">
                    <div class="parent-icon">
                        <ion-icon name="person-circle-sharp"></ion-icon>
                    </div>
                    <div class="menu-title">Search</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </aside>
    <!--end sidebar -->

    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-menu-button">
                <ion-icon name="menu-sharp"></ion-icon>
            </div>
            <form class="row g-3" method="POST" action="{{route('search.store')}}">
                @csrf
            <div class="input-group sm-1">
                <input type="text" class="form-control" name="house_no" placeholder="Search By Name" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
            </form>
            <div class="top-navbar-right ms-auto">

                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mobile-search-button">
                        <a class="nav-link" href="javascript:;">
                            <div class="">
                                <ion-icon name="search-sharp"></ion-icon>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dark-mode-icon" href="javascript:;">
                            <div class="mode-icon">
                                <ion-icon name="moon-sharp"></ion-icon>
                            </div>
                        </a>
                    </li>

                    @php
                        $user = \Auth::user();
                    @endphp
                    <li class="nav-item dropdown dropdown-user-setting">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                           data-bs-toggle="dropdown">
                            <div class="user-setting">
                                <h6 class="mb-0 dropdown-user-name">{{$user->name}}</h6>

                                {{-- <img src="{{asset('assets/images/avatars/06.png')}}" class="user-img" alt=""> --}}
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        {{-- <img src="{{asset('assets/images/avatars/06.png')}}" alt="" --}}
                                             class="rounded-circle" width="54" height="54">
                                        <div class="">
                                            <h6 class="mb-0 dropdown-user-name">{{$user->name}}</h6>
                                            <small
                                                class="mb-0 dropdown-user-designation text-secondary">{{$user->user_type}}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('home')}}">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <ion-icon name="person-outline"></ion-icon>
                                        </div>
                                        <div class="ms-3"><span>Home</span></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <ion-icon name="log-out-outline"></ion-icon>
                                        </div>
                                        <div class="ms-3"><span href="{{route('logout')}}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout</span></div>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>
    </header>
    <!--end top header-->


    <!-- start page content wrapper-->

    @yield('content')


    <!--start footer-->
    <footer class="footer">
        <div class="footer-text">
            {{-- Copyright © 2021. All right reserved. --}}
        </div>
    </footer>
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <ion-icon name="color-palette-sharp" class="me-0"></ion-icon>
        </button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
             tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                           value="option1">
                    <label class="form-check-label" for="LightTheme">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                           value="option2">
                    <label class="form-check-label" for="DarkTheme">Dark</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3"
                           checked>
                    <label class="form-check-label" for="SemiDark">Semi Dark</label>
                </div>
                <hr/>
                <h6 class="mb-0">Header Colors</h6>
                <hr/>
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

</div>
<!--end wrapper-->


<!-- JS Files-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<!--plugins-->
<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>

{{-- selct 2 --}}
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/form-select2.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
{{-- data table --}}
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/table-datatable.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('assets/js/main.js')}}"></script>
@yield('scripts')

</body>

</html>
