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

  <title>Intot</title>

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

<body class="sub_page">

  <body class="">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">

        </div>
      </header>
      <!-- end header section -->
    </div>



    <!-- contact section -->
    <section class="contact_section layout_padding">
      <div class="container">
        <p>
       Inquireis
        </p>
        <h2 class="">
          FREE CONSULTATION
        </h2>
      </div>
      <div class="container">

        <div class="row">
          <div class="col-md-6 ">
            <form action="{{route('inquiries.store')}}" method="POST" >
                @csrf
              <div class="contact_form-container">
                <div>
                  <div>
                    <label>
                      Name
                      <input type="text" name="name" required/>
                    </label>
                  </div>
                  <div>
                    <label>
                      Email
                      <input type="email" name="email" />
                    </label>
                  </div>

                  <div>
                    <label>
                      Phone Number
                      <input type="text" name="mobile" required/>
                    </label>
                  </div>

                  <div>
                    <label>
                      Message
                      <textarea name="message" id="" cols="30" rows="10"></textarea>
                    </label>
                  </div>
                  <div class="mt-5">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="contact_img-box">
              <img src="images/form-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact section -->



    <!-- end info section -->
    <hr class="footer_hr">
    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        &copy;
       2022

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
