<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $fillable = [
        'soal', 'answer_a','answer_b','answer_c','answer_d', 'right_answer',
    ];

    protected $table = 'quiz';
}
