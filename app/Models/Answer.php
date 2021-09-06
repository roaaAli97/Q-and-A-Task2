<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Answer extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=array('question_id','answer');
    
    public function questions(){
        return $this->belongsTo(Question::class);
    }
   
}
