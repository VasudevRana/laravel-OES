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
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
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
<body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top header-transparent">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1 class="text-light"><a href="/"><span>OES</span></a></h1>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                    <li><a class="nav-link scrollto" href="{{route('teacher')}}">Home</a></li>   
                        <li class="dropdown">
                        <a class="nav-link scrollto" href="{{route('teacher_dash')}}">Dashboard <i class='bi bi-chevron-down'></i></a>
                            <ul>
                            <li><a class="nav-link scrollto" href="{{route('exam_category')}}">Add exam</a></li>
                            <li><a class="nav-link scrollto" href="{{route('add_edit_exam_questions')}}">Add Questions</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="{{route('teacher_students')}}">Students</a></li>
                        <li><a class="nav-link scrollto" href="{{route('teacher_rank')}}">Ranking</a></li>
                        <li class="dropdown">
                            <a href="#">
                                <!-- view who is logged in  -->
                                <!-- <?php
                                // if (!isset($_SESSION['username'])) {
                                //     header("Location: index.php ");
                                // } else {
                                //     $nameofteacher = $_SESSION['username'];
                                // }
                                ?> -->
                                <!-- <span><//?php echo $nameofteacher; ?></span> -->
                                <!-- view who is logged in  -->
                                <i class='bi bi-chevron-down'></i>
                            </a>
                            <ul>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                                <li><a href="changepassteacher">ChangePassword</a></li>
                            </ul>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar --> 
            </div>
        </header><!-- End Header -->
       
        <!-- End Header -->
<section id="hero">
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-6">
                            <form action="addquestion/{category}" method="post">
                                @csrf
                                <input type="hidden" name="category" value="{{ request()->route('category') }}"> 
                                <div class="card">
                                    <div class="card-header">
                                        <p class='text-center'> <strong>Add new Questions in  </strong></p>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label class=" form-control-label">Add Question</label>
                                            <div class="input-group">
                                                <input class="form-control" name="question" placeholder="enter Question">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Add Option1</label>
                                            <div class="input-group">
                                                <input class="form-control" name="opt1" placeholder="Enter Option 1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Add Option2</label>
                                            <div class="input-group">
                                                <input class="form-control" name="opt2" placeholder="Enter Option 2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Add Option3</label>
                                            <div class="input-group">
                                                <input class="form-control" name="opt3" placeholder="Enter Option 3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Add Option4</label>
                                            <div class="input-group">
                                                <input class="form-control" name="opt4" placeholder="Enter Option 4">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Add Answer</label>
                                            <div class="input-group">
                                                <input class="form-control" name="answer" placeholder="Enter Answer">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input class="btn btn-primary" type="submit" name="submit" value="Add Question">
                                            <button class="btn btn-danger" style="float:right;"><a style="color:white;"href="{{route('add_edit_exam_questions')}}">Cancel</a></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
