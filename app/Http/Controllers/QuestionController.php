<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use DB;
class QuestionController extends Controller
{
    public function index(){
        $questions=Question::all();
        return response()->json($questions);
    }
     
    public function store(Request $request){
          
        //   $request->validate([
        //      'Username'=>'required',
        //      'Question'=>'required'
        //   ]);
          $newQuestion=new Question([
              'Username'=>$request->get('Username'),
              'Question'=>$request->get('Question')
          ]);
          $newQuestion->save();
        return response()->json($newQuestion);
    }
    public function show($id){
        
      $question=Question::findOrFail($id);
       return response()->json($question);

    }
    public function update(Request $request ,$id){
       $updatedQuestion=Question::findOrFail($id);

       $updatedQuestion->Question=$request->get('question');

       $updatedQuestion->save();
       return response()->json($updatedQuestion);
    }
    public function  destroy($id){
        $question=Question::findOrFail($id);
        $question->delete();
        return response()->json($question::all());
    }
}
