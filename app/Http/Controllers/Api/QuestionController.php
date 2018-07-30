<?php

namespace App\Http\Controllers\Api;

use App\Question;
use DB;
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
        $myQuestions = DB::table('questions')
            ->join('problem_types', 'questions.problem_type_id', '=', 'problem_types.id')
            ->select('questions.id', 'questions.title', 'problem_types.name', 'questions.created_at')
            ->where('questions.patient_id', '=', $id)
            ->orderBy('questions.created_at', 'desc')->get();

        return response()->json($myQuestions, 200);
    }
}
