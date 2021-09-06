<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;
class Question extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected  $fillable=array('Username','Question');

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
