<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use DB;
class QuestionController extends Controller
{
    public function index(){
        $questions=Question::all();
        return view('Question\index',compact('questions'));
    }
    public function create(){
        return view('Question\create');
    }
    public function show(){
        $question=new Question();
        $question->Username=request('username');
        $question->Question=request('question-field');
        error_log(request('question-field'));
        $question->save();
      

        return redirect('/questions');
    }
    public function  destroy($id){
        DB::table('questions')
            ->where('id',$id)
             ->delete();
        return redirect('/questions');
    }
}
