<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('questions',[QuestionController::class,'index']);
Route::get('questions/{id}',[QuestionController::class,'show']);
Route::post('questions',[QuestionController::class,'store']);
Route::patch('questions/{id}',[QuestionController::class,'update']);
Route::delete('questions/{id}',[QuestionController::class,'destroy']);
Route::get('answers/{id}',[AnswerController::class,'index']);
Route::get('answer/{id}',[AnswerController::class,'show']);
Route::post('answers/{id}',[AnswerController::class,'store'])->where('id','[0-9]+');
Route::delete('answers/{id}',[AnswerController::class,'destroy']);
Route::patch('answers/{id}',[AnswerController::class,'update']);

