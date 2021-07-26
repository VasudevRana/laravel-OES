@extends('teach')

@section('sec')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <br>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">

                    <h6 style="color:white;padding:30px;"><b>View questions </b></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style=padding:4px;>Question no.</th>
                                    <th style=padding:4px;>Question</th>
                                    <th style=padding:4px;>opt1 </th>
                                    <th style=padding:4px;>opt2</th>
                                    <th style=padding:4px;>opt3</th>
                                    <th style=padding:4px;>opt4</th>
                                    <th style=padding:4px;>Answer</th>
                                    <th style=padding:4px;>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                        <tr>
                                            <td>{{$question->que_no}}</td>
                                            <td>{{$question->qns}}</td>
                                            <td>{{$question->opt1}}</td>
                                            <td>{{$question->opt2}}</td>
                                            <td>{{$question->opt3}}</td>
                                            <td>{{$question->opt4}}</td>
                                            <td>{{$question->ans}}</td>
                                            <td><a class="btn btn-danger" href="question_delete/{{$question->qid}}">Delete</a></td>

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
<!-- ======= Footer ======= -->
@stop