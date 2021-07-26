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