<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Gn App</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="#">
            <span>
              GN App
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                    @if (Route::has('login'))
                    @auth
                  <a class="nav-link" href="{{ url('/home') }}">
                    <img src="images/login.png" alt="" />
                    <span>Home</span></a>
                  </li>
                  @else
                  @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('login') }}">
                        <img src="images/login.png" alt="" />
                        <span>Login</span></a>
                        @endif

                </li>
                @endauth

                {{-- <li class="nav-item">
                    @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}">
                    <img src="images/signup.png" alt="" />
                    <span>Sign Up</span>
                    @endif
                  </a>
                </li> --}}
                @endif
              </ul>
              <form class="form-inline my-2 mb-3 mb-lg-0 mr-5">
                {{-- <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button> --}}
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">LOGIN</a>
                @endauth
                {{-- <a href="portfolio.html">PORTFOLIO</a> --}}

                <a href="{{url('/contact')}}">CONTACT US</a>

              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li> --}}
          {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li> --}}
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>
                    Grama Niladari
                    <span>
                        Web App
                    </span>
                  </h1>
                  <p>

                  </p>

                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="carousel-item">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                  <h1>
                  Grama Niladari
                    <span>
                     Web App
                    </span>
                  </h1>
                  <p>

                  </p>
                  <div>
                    <a href="">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        {{-- <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div> --}}
      </div>

    </section>

    <!-- end slider section -->
  </div>



  <!-- end info section -->
  <hr class="footer_hr">
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy;
     2022
      {{-- <a href="https://html.design/">Free Html Templates</a> --}}
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>



  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>


</body>

</html>
