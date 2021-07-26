<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $req){
       $username= $req->post('username');
       $password= $req->post('password');

       $result=Teacher::where(['teacher_name'=>$username,'teacher_password'=>$password])->get();
      if(isset($result['0']->id)){
          $req->session()->put('TEACHER_LOGIN',true);
          $req->session()->put('TEACHER_ID',$result['0']->id);
          return redirect('teacher');
      }
      else{
          $req->session()->flash('error','Please enter correct details');
          return redirect('loginteacher');
      }

    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }


    public function destroy(Teacher $teacher)
    {
        //
    }

    public function register(Request $request){
        $teacher = new Teacher;
        $teacher->teacher_name=$request->input('username');
        $teacher->teacher_email=$request->input('email');
        $teacher->teacher_password=$request->input('password');
        $teacher->teacher_role=$request->input('role');
        $teacher->teacher_contact=$request->input('contact');
        $teacher->teacher_address=$request->input('address');
        $teacher->save();
        $request->session()->put('teacher',$request->input('username'));
        return redirect('loginteacher');
    }
}
