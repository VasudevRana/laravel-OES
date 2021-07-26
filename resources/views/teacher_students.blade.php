
@extends('teach')

@section('sec')
<section id="hero" style="padding:100px;">
    
    <div class="col-lg-6 center_div" >
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Students registered</strong>
                            </div>
                            <div class="card-body centered">
                                <table class="table table-bordered table-hover ">
                                    <thead>
                                        <tr>
                                           
                                            <th scope="col">Name</th>
                                            <th scope="col">email </th>
                                            <th scope="col">contact</th>
                                            <th scope="col">address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student)
                                        <tr>
                                            <td>{{$student->student_name}}</td>
                                            <td>{{$student->student_email}}</td>
                                            <td>{{$student->student_contact}}</td>
                                            <td>{{$student->student_address}}</td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>   
</section><!-- End Hero -->
@stop




