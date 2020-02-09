<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answerQuiz extends Model
{
    protected $fillable = [
        'user_answer',
    ];

    protected $table = 'quiz';
}
