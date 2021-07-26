@extends('teach')

@section('sec')
<style>
    .center_div{
    margin: 0 auto;
    width:80%; 
    padding-left:100px;
}
.center_button{
    
    width:30%; 
    padding-left:10px;
}
</style>
<!-- ======= Hero Section ======= -->
<section id="hero">
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:white;"href="exam_category"><button class="btn btn-primary center_button">Add Category</button></a>
<br>
<br>
<div class="col-lg-6 center_div" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Exam Category</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                           
                                            <th scope="col">Category</th>
                                            <th scope="col">Time </th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $categories)
                                        <tr>
                                            <td>{{$categories->category}}</td>
                                            <td>{{$categories->exam_time_in_minutes}}</td>
                                            <td><a class="btn btn-info" href="category_edit/{{$categories->id}}">Edit</a></td>
                                            <td><a class="btn btn-danger" href="category_delete/{{$categories->id}}">Delete</a></td>

                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>   
                    
  </section>
@stop
