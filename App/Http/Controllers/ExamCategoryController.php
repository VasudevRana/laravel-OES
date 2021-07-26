<?php

namespace App\Http\Controllers;

use App\Models\Exam_category;
use Illuminate\Http\Request;

class ExamCategoryController extends Controller
{
    
    public function exam_category(Request $request){
        $category = new Exam_category;
        $category->category=$request->input('examcategory');
        $category->exam_time_in_minutes=$request->input('examtime');
        $category->save();
        $request->session()->flash('message','Category successfully submitted');
        $request->session()->put('teacher',$request->input('username'));
        return redirect('exam_category');

    }
    

    
    public function show(Exam_category $exam_category)
    {
        return view('viewcategory')->with('category',Exam_category::all());
       
    }

    
    public function edit(Exam_category $exam_category,$id)
    {
        return view('edit_exam_category')->with('category',Exam_category::find($id));
    }

    
    public function update(Request $request, Exam_category $exam_category)
    {
        $category = Exam_category::find($request->id);
        $category->category=$request->input('examcategory');
        $category->exam_time_in_minutes=$request->input('examtime');
        $category->save();
        $request->session()->flash('message','Category successfully updated');
        return redirect('viewcategory');

    }

    
    public function destroy(Exam_category $exam_category,$id)
    {
        Exam_category::destroy(array('id',$id));

        return redirect('viewcategory');
    }
    public function show2(Exam_category $exam_category){
        return view('add_edit_exam_questions')->with('category',Exam_category::all());
    }
    public function student_exam_category(Exam_category $exam_category){
        return view('select_exam')->with('category',Exam_category::all());
    }
}
