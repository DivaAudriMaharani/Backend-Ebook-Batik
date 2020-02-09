<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\quiz;
use App\answerQuiz;
use DB;

class quizController extends Controller
{
    public function create(Request $request)
    {
        $quiz = quiz::create([
            'soal'    => $request->soal,
            'answer_a'    => $request->answer_a,
            'answer_b'    => $request->answer_b,
            'answer_c'    => $request->answer_c,
            'right_answer'    => $request->right_answer,
        ]);
        return $quiz;
    }
    public function soal(Request $request, $id)
    {
        $article = answerQuiz::findOrFail($id);
        $quiz = $request->user_answer;
        $article->update($request->all());
        if($article->user_answer == $article->right_answer){
            $article->result = (20);
            $article->correct = (true);
        };
        $article->update($request->all());
        return $article;
    }

    public function grandResult()
    {
        $correct = quiz::where('correct','=', 1)->count();
        $wrong = quiz::where('correct','=', 0)->count();
        $result = quiz::all()->sum('result');
        return response()->json(['status' => '200', 'data' => 'Success', 'Result' => $result, 'benar' => $correct, 'salah' => $wrong]);

    }
}
