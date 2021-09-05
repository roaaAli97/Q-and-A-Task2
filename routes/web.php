<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
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

Route::get('/questions',[QuestionController::class ,'index']);
Route::get('/create/question',[QuestionController::class,'create']);
Route::post('/questions',[QuestionController::class,'show']);
Route::get('/delete/question/{id}',[QuestionController::class,'destroy']);
Route::get('/create/{id}',[AnswerController::class,'create']);
Route::post('/answer/{id}',[AnswerController::class,'addAnswer']);
Route::get('/answer/{id}',[AnswerController::class,'index']);
Route::get('/delete/{id}',[AnswerController::class,'destroy']);
//Route::get('/question/{id}/delete',QuestionController::class,'destroy');