@extends('teach')

@section('sec')
<section id="hero">
        <br>
        <div class="breadcrumbs">
        <div class="col-sm-4">
        <div class="page-header float-left">
        <div class="page-title">
        <h6 style="font-size:18px;color:white;padding:30px;text-decoration:underline;"><b>Select exam Categories for add and edit questions</b></h6></div></div></div></div>
      <div class="content mt-3">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="card">  
                    <div class="card-body">
                        
                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                      
                                            <th scope="col">Category</th>
                                            <th scope="col">Time </th>
                                            <th scope="col">Select</th>  
                                            <th scope="col">View</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category as $categories)
                                        <tr>
                                            <td>{{$categories->category}}</td>
                                            <td>{{$categories->exam_time_in_minutes}}</td>
                                            <td><a class="btn btn-info" href="add_questions/{{$categories->category}}">Select</a></td>
                                            <td><a class="btn btn-danger" href="view_questions/{{$categories->category}}">View</a></td>

                                        </tr>
                                         @endforeach
                                   
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section><!-- End Hero -->
@stop