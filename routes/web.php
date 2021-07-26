<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamCategoryController;
use App\Http\Controllers\QuestionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ALL ROUTE OF THE FIRST PAGE
Route::view('/','index');
Route::view('about','about');
Route::view('loginstudent','loginstudent');
Route::view('loginteacher','loginteacher');
Route::view('registration','registration');
Route::view('registerteacher','registerteacher');



//ALL ROUTE FOR TEACHERS 
Route::view('teacher','teacher')->name('teacher');
Route::view('teacher_dash','teacher_dash')->name('teacher_dash');
Route::view('exam_category','exam_category')->name('exam_category');
Route::view('add_edit_exam_questions','add_edit_exam_questions')->name('add_edit_exam_questions');
Route::view('teacher_students','teacher_students')->name('teacher_students');
Route::view('teacher_rank','teacher_rank')->name('teacher_rank');
Route::view('viewcategory','viewcategory')->name('viewcategory');
Route::get('logout', [TeacherController::class,'logout'])->name('logout');


//login and submitting for teacher
Route::post('register',[TeacherController::class,'register']);
Route::post('login',[TeacherController::class,'login']);


// adding data in exam category table using controller by only teacher
Route::post('exam_category_add',[ExamCategoryController::class,'exam_category']);
Route::get('viewcategory',[ExamCategoryController::class,'show']);
Route::get('category_delete/{id}',[ExamCategoryController::class,'destroy']);
Route::get('category_edit/{id}',[ExamCategoryController::class,'edit']);
Route::post('exam_category_edit/{id}',[ExamCategoryController::class,'update'])->name('exam_category.update');

// adding questions into the specified category
Route::view('add_questions/{category}','add_questions');
Route::post('add_questions/addquestion/{category}',[QuestionController::class, "addquestion"]);
// Route::post('addquestion/{category}',[QuestionController::class,'store']);

//to get registered stuidents in teacher
Route::get('teacher_students',[StudentController::class,'show'])->name('teacher_students');;

//adding questio first getting table of categories for 
Route::get('add_edit_exam_questions',[ExamCategoryController::class,'show2'])->name('add_edit_exam_questions');

// all done
Route::view('view_questions/{category}','view_questions');
Route::get('view_questions/{category}',[QuestionController::class,'show']);
Route::get('question_delete/{id}',[ExamCategoryController::class,'destroy']);





// Student ka shuru hoega yaah se routing ka saara

Route::view('student','student');
Route::view('select_exam','select_exam');
Route::get('edit_student',[StudentController::class,'index'])->name('edit_student');
Route::view('all_results','all_results');
Route::get('logout', [StudentController::class,'logout'])->name('logout');

//login and submitting for student
Route::post('studentregister',[StudentController::class,'registerStudent']);
Route::post('studentlogin',[StudentController::class,'loginStudent']);
//update student
Route::post('updatestudent/{student_name}',[StudentController::class,'update'])->name('updatestudent');

Route::get('select_exam',[ExamCategoryController::class,'student_exam_category']);

Route::get('test/{category}',[QuestionController::class,'getTestQuestions'])->name('getTestQuestions');
Route::post('submitExam',[QuestionController::class, "submitExam"])->name('submitExam');

