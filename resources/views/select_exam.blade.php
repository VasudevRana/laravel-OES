@extends('stu')

@section('sec')
<section id="hero">
<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">

                    <h4 style="font-size:18px;color:white;padding:15px;"><b>Start the exam you want to give </b></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th style=padding:4px;>EXAM</th>
                                    <th style=padding:4px;>TIME (in minutes)</th>
                                    <th style=padding:4px;>Start Exam</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $categories)
                                        <tr>
                                            <input type="hidden" value="{{$categories->category}}" name="categoryId">
                                            <td>{{$categories->category}}</td>
                                            <td>{{$categories->exam_time_in_minutes}}</td>
                                            <td><a class="btn btn-danger" href="{{route('getTestQuestions',['category'=>$categories->category])}}">Start Exam</a></td>

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


