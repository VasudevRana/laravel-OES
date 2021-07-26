<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function getTestQuestions(Request $request, $category){

        $questions = DB::table('questions')->where('category', $category)->get();
        $duration=DB::table('exam_categories')->where('category',$category)->value('exam_time_in_minutes');
        

        return view('test',['questions'=>$questions,'category'=>$category,'duration'=>$duration]);

    }

    public function submitExam(Request $request){
        $answers =  $request->all();
        $points=0;
        $category = $request->input('category');
        $res=DB::table('questions')->where('category',$category)->get();
        $count_questions=count($res);
        foreach($answers as $questionId=>$userAnswer ){
            //if the id is not a number then don't try to get an answer
          if(is_numeric($questionId)){
              $questionInfo =  DB::table('questions')->where('qid',$questionId)->get(); 
      
   dd($questionInfo);
        //       $correctAnswer = $questionInfo[0]->ans;
              
        //       if($correctAnswer == $userAnswer){
        //           //give user a point
        //           $points++;
     
            //   }
        }
         }
        // $percentage = ($points/$count_questions)*100;
        // dd($percentage);


// return redirect()->route('student')->with('examSubmitted','The exam has been submitted successfully, check your profile for the results later');
    }


   

 
    public function addquestion(Request $request)
    {
      
        $category=$request->input('category');
        
        $c=DB::table('exam_categories')->where('category',$category)->get();
        foreach($c as $cats ){
            $category=$cats->category;
        }
        $already_exist='';
        $question = new Question;
        $loop=0;
        $res=DB::table('questions')->where('category',$category)->orderBy('qid')->get();
        $count=count($res);
        if($count==0){}
        else{
            foreach($res as $row){

                $already_exist=$row->qns;
                $qid=$row->qid;
                $loop=$loop + 1;
                DB::table('questions')->where('qid',$qid)->update(['que_no'=>$loop]);
            }
        }
        $loop=$loop+1;

        $question->qns=$request->input('question');
        $question->opt1=$request->input('opt1');
        $question->opt2=$request->input('opt2');
        $question->opt3=$request->input('opt3');
        $question->opt4=$request->input('opt4');
        $question->ans=$request->input('answer');
        $question->category=$request->input('category');
    
        if($question->qns == $already_exist){
            return redirect('teacher');
        }
        else{
        $question->save();
        $request->session()->flash('message','Question successfully submitted');
        $request->session()->put('teacher',$request->input('username'));
        return redirect('add_questions');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question,$category)
    {
        $all_questions=DB::table('questions')->where('category',$category)->get();
        return view('view_questions',['questions'=>$all_questions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question,$id)
    {
        
            Question::destroy(array('id',$id));
    
            return redirect('view_questions');
        
    }
    public function show2(Question $question){
     
    }
}
