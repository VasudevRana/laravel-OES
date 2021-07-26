@extends('teach')

@section('sec')
<style>
.center_div{
    margin: 0 auto;
    width:100%; /* value of your choice which suits your alignment */
    padding-left:300px;
}

</style>
<!-- ======= Hero Section ======= -->
<section id="hero" >
        <br>
        <br>
        <div class="content mt-3 center_div  " >
            <div class="animated fadeIn">
                <div class="row ">                               
                    <div class="col-xs-6 col-sm-6   ">
                        <div class="card">
                        <form action="exam_category_add" class="centered" name='form1' method='post'>
                        @csrf
                            <div class="card-header ">
                               <p class='text-center'> <strong>Add Category</strong></p> 
                            </div>
                            @if(session()->has('message'))
                            <div class="alert alert-primary" role="alert">
                            {{session('message')}}
                            </div>
                           @endif
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">New Exam Category</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" name="examcategory" placeholder="enter new exam category">
                                    </div>                                   
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class=" form-control-label">Exam time in Minutes</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" name="examtime" placeholder="enter time in minutes">
                                    </div>                                     
                                </div>
                                <br>
                                <div class="form-group">
                                   <input class="btn btn-primary" type = "submit" name = "submit" value="Add new category">
                                   <button class="btn btn-info"><a style="color:white;"href="viewcategory">View Category</a></button>
                                  <button class="btn btn-danger" style="float:right;"><a style="color:white;"href="teacher">Cancel</a></button>
                                </div> 
                                
                                </span>                                   
                            </div>
                                </form>
                            </div>
                        </div>
                                                   
                    </div>
                              
                </div>
            </div><!-- .animated -->
      
       <br>
        <br> 

        </section><!-- End Hero -->
@stop