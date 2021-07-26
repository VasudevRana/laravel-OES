@extends('stu')

<section id="hero">

            <div class="hero-container" data-aos="fade-up">
                <div class="container">
                    <section id="login">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-xs-offset-3">
                                <br>
                                <br>
                                <br>
                                    <div class="form-wrap">
                                        <h1>Edit Student Details</h1>
                                        @foreach($student as $student)
                                        <form action="{{route('updatestudent',['student_name'=>$student->student_name])}}" method="post" id="login-form" autocomplete="off">
                                         
                                            <div class="form-group">

                                                <label for="stu_id" class="sr-only"><b></b></label>
                                                <input type="text" name="username" id="stu_id" value="{{$student->student_name}}" class="form-control" placeholder="Enter Desired Username">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="email" class="sr-only"><b></b></label>
                                                <input type="email" name="email" value="{{$student->student_email}}" id="email" class="form-control" placeholder="somebody@example.com">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="student_mobile" class="sr-only"><b></b></label>
                                                <input type="integer" name="student_mobile" value="{{$student->student_contact}}" id="student_mobile" class="form-control" placeholder="Enter Mobile Number">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="student_address" class="sr-only"><b></b></label>
                                                <input type="student_address" value="{{$student->student_address}}" name="student_address" id="student_address" class="form-control" placeholder="Enter address">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="password" class="sr-only"><b></b></label>
                                                <input type="text" name="student_password" id="key" value="{{$student->student_password}}" class="form-control" placeholder="Password">
                                            </div>
                                            <br>
                                            <br>
                                            <input type="submit" name="edit_student" id="btn-login" class="btn btn-custom btn-lg btn-primary" value="Edit">
                                          
                                        </form>
                                        @endforeach
                                    </div>
                                </div> <!-- /.col-xs-12 -->
                            </div> <!-- /.row -->
                        </div>
                    </section><!-- End Hero -->

            @section('sec')

            @stop