 
    <!-- ======= Header ======= -->
<body>
        <header id="header" class="fixed-top header-transparent">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1 class="text-light"><a href="/"><span>OES</span></a></h1>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="student">Home</a></li>
                        <li><a class="nav-link scrollto" href="select_exam">Select Exam</a></li>
                        <li><a class="nav-link scrollto" href="{{route('edit_student')}}">Edit</a></li>
                        <li><a class="nav-link scrollto" href="all_results">Results</a></li>
                        <!-- <li><a class="nav-link scrollto" href="./student.php">Student </a></li> -->
                        <li class="dropdown">
                            <a href="#">
                                @if(Session::get('student_name'))
                                <span>{{Session::get('student_name')}} </span>
                                <i class='bi bi-chevron-down'>heelo</i>
                                @endif
                                
                            </a>
                            <ul>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                                <li><a href="changepass">ChangePassword</a></li>
                            </ul>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </header><!-- End Header -->