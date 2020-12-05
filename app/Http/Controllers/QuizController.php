<?php

namespace App\Http\Controllers;

use App\Models\Quiz;


class QuizController extends Controller
{
    public function show() {
        return view("welcome");
    }

//    public function index() {
//        $quizes = Quiz::all();
//        return view ('welcome') -> with('quizes', $quizes);
//    }
}
