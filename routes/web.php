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

// Appointments Routes
Route::get('/appointments', 'AppointmentsController@index')->name('appointments');

// Appointments Routes
Route::get('/doc_profile', 'DoctorProfilesController@index')->name('doc_profile');