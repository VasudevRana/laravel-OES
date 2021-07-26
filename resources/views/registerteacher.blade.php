<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Online_Examination_Website</title>
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
 
</head>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="/"><span>OES</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="about">About Us</a></li>
          <li><a class="nav-link scrollto" href="loginstudent">Login Student</a></li>
          <li><a class="nav-link scrollto" href="loginteacher">Login Teacher</a></li>
          <li><a class="nav-link scrollto" href="registration">Registration </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-user fa-4x"></i></h3>
                            <h3 style="text-transform: uppercase; font-size:40px; color:#fff;"  class="text-center">Register as Teacher</h3>
                            <div class="panel-body">
                                <form role="form" action="register" method="POST" id="login-form" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label for="stu_id" class="sr-only"></label>
                                        <input type="text" name="username" id="stu_id" class="form-control" placeholder="Enter Desired Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="sr-only"></label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                                    </div>                           
                                    <div class="form-group">
                                        <label for="password" class="sr-only"></label>
                                        <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <input type="text"  required name="role" id="teacher" value="teacher" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact" class="sr-only"></label>
                                        <input type="tel" name="contact" id="contact" class="form-control" placeholder="Enter your contact No.">
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="sr-only"></label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address">
                                    </div>
                                    <br>
                                    <input type="submit" name="Register" id="btn-login" class="btn btn-custom btn-lg btn-primary" value="Register"> &nbsp;&nbsp;&nbsp;<span> <button class="btn btn-danger"><a style="color:white "href="registration">Register as Student</a></button></span>
                                </form>
                            </div><!-- Body-->
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- End Hero -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

    </body>

</html>