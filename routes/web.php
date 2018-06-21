<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('index');

Auth::routes();

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

// Dashboard Routes
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Questions Routes
Route::get('/questions', 'QuestionsController@index')->name('questions');
Route::get('/questions/{question}', 'QuestionsController@show');

// Appointments Routes
Route::get('/appointments', 'AppointmentsController@index')->name('appointments');

// Appointments Routes
Route::get('/my_profile', 'DoctorProfilesController@index')->name('doc_profile');

// Doctor Specialities Routes
Route::get('/my_specialities', 'DoctorSpecialitiesController@index')->name('doc_specialities');
Route::post('/my_specialities', 'DoctorSpecialitiesController@store');
Route::delete('/my_specialities/{id}', 'DoctorSpecialitiesController@destroy');

// Doctor Chambers Routes
Route::get('/my_chambers', 'ChambersController@index')->name('doc_chambers');
Route::get('/my_chambers/new_chamber', 'ChambersController@create')->name('new_chamber');
Route::post('/my_chambers', 'ChambersController@store');

// Doctor Schedules Routes
Route::get('/my_schedules', 'SchedulesController@index')->name('doc_schedules');
Route::get('/my_schedules/new_schedule', 'SchedulesController@create')->name('new_schedule');
Route::post('/my_schedules', 'SchedulesController@store');