<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class StudentController extends Controller
{
    // register student in table
    public function registerStudent(Request $request){
        $student = new Student;
        $student->student_name=$request->input('username');
        $student->student_email=$request->input('email');
        $student->student_password=$request->input('password');
        $student->student_role=$request->input('role');
        $student->student_contact=$request->input('contact');
        $student->student_address=$request->input('address');
        $student->save();
        $request->session()->put('student',$request->input('username'));
        return redirect('loginstudent');
    }
    // function of student login
    public function loginStudent(Request $req){
        $username= $req->post('username');
        $password= $req->post('password');
 
        $result=Student::where(['student_name'=>$username,'student_password'=>$password])->get();
       if(isset($result['0']->id)){
           $req->session()->put('STUDENT_LOGIN',true);
           $req->session()->put('student_name',$result['0']->student_name);
           return redirect('student');
       }
       else{
           $req->session()->flash('error','Please enter correct details');
           return redirect('loginstudent');
       }
 
     }
    
    public function index()
    {
        $name = request()->session()->get('student_name', '');
       $student=DB::table('students')->where('student_name',$name)->get();
       return view('edit_student',['student'=>$student]);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show(Student $student)
    {
        return view('teacher_students')->with('students',Student::all());
    }

    public function edit(Student $student)
    {
      
    }
    
    public function update(Request $request, Student $student_name)
    {
        
        $student = Student::find($student_name);
        $student->student_name = $request->input('name');
        $student->student_email = $request->input('email');
        $student->student_contact = $request->input('student_mobile');
        $student->student_address = $request->input('student_address');
        $student->student_password = $request->input('student_password');  
        $student->update();
        return view('edit_student')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        //
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
