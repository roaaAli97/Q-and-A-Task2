<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use DB;
class AnswerController extends Controller
{

    public function index(){
        $url=url()->previous();
        $id=$url[strlen($url)-1];
        error_log($id);

        $answers=Answer::all();
        $answers=DB::table('answers')
                    ->where('question_id',$id)
                    ->get();
        return view('\Answer\index',compact('answers'));
    }
    
   public function create($id){
    //    $url=$request->url();
    //    $id=$url[strlen($url)-1];
       return view('\Answer\create')->with('id',$id);
   }
   public function addAnswer($id){
   
     
     $answer=request('answer');
    
    
    $answerModel=new Answer();
    $answerModel->question_id=$id;
    $answerModel->answer=$answer;
    $answerModel->save();
    return redirect('/answer'.'/'.$id);
}
     public  function destroy($id){
           $url=url()->previous();
          $questionId=$url[strlen($url)-1];
          
          
         DB::table('answers')->where('id',$id)
         ->delete();
          return redirect('/answer'.'/'.$questionId);
     }
}
