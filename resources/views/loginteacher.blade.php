@extends('welcome')

@section('content')
   <!-- ======= Hero Section ======= -->
   <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-user fa-4x"></i></h3>
                            <h3 style="text-transform: uppercase; font-size:40px; color:#fff; " class="text-center">Login as Teacher</h3>
                            @if(session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                            {{session('error')}}
                            </div>
                            @endif
                            <div class="panel-body">
                               
                                <form id="login-form" action="login" role="form" autocomplete="off" class="form " method="post">
                                @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                                            <input name="username" type="text" class="form-control" placeholder="Enter Username">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                                            <input name="password" type="password" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input name="login" class="btn btn-lg btn-primary btn-block" value="Login" type="submit"><span class="psw"><a style="color:white;padding-left:20px;text-decoration:underline;" href="forgotpassword.php"><b>Forgot password ?</b></a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- End Hero -->
@stop