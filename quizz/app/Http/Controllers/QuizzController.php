<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAnswerRequest;
use App\Http\Requests\SaveQuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    public function index(){
        $quiz = Question::with(['questions'])->get();
//        return view with this information
        return view('quiz')->with('quiz', $quiz);

    }


    public function create(){
        $answers = Answer::all();
        return view('create', compact('answers'));
    }
    public function save(SaveQuestionRequest $questionRequest, SaveAnswerRequest $answerRequest){
//        dd($request->all());
        $question = new Question($questionRequest->all());
        $question->user_id = 1;
        $question->save();


        $answer = new Answer($answerRequest->all());
        $answer->save();
        return redirect()->back();
    }
}
