<?php

namespace App\Http\Controllers\Api;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    //
    public function store(Request $request)
    {
        Question::create($request->all());
        return response()->json("ASKED", 201);
    }

    public function getMyQuestions($id)
    {
        $questions = (new Question)->where('patient_id', $id)->get();
        return response()->json($questions, 200);
    }
}
