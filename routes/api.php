<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function(){
    return 'Hello World';
});

Route::post('/patients', 'Api\PatientController@store');
Route::get('/patient/{uid}', 'Api\PatientController@getPatient');

// Specialities
Route::get('/specialities', 'Api\SpecialityController@getSpecialities');

// Questions
Route::post('/questions', 'Api\QuestionController@store');
Route::get('/questions/{id}', 'Api\QuestionController@getMyQuestions');