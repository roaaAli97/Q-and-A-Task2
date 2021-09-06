<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use DB;
class AnswerController extends Controller
{

    public function index($id){
        //$id here is the id of the question you want to get its answers
        //it gets the answer of a specific question 
       $answers=Answer::where('question_Id',$id)->get();
        return response()->json($answers);
    }
    public function store(Request $request,$id){
        //$id should be the id of the question
        $question=Question::find($id);
        $answer=new Answer();
        $answer->answer=$request->get('answer');
        $question->answers()->save($answer);

        
    }
    //showing one answer
    public function show($id){
         //$id is the id of the question
       $answer=Answer::findOrFail($id);
       return response()->json($answer);
    }

    public function update(Request $request,$id){
         // $id is the id of the answer you want to update
        $answer=Answer::findOrFail($id);

        $answer->answer=$request->get('answer');
        $answer->save();
        return response->json($answer::all());
    }

    public function destroy($id){
        //this is the id of the question
       $answer=Answer::findOrFail($id);
       $answer->delete();
       return response()->json($answer::all());
    }
}
