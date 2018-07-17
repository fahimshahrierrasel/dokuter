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
Route::get('/doctor/dashboard', 'HomeController@index')->name('dashboard');

// Questions Routes
Route::get('/doctor/questions', 'QuestionsController@index')->name('questions');
Route::get('/doctor/questions/{question}', 'QuestionsController@show');

// Appointments Routes
Route::get('/doctor/appointments', 'AppointmentsController@index')->name('appointments');

// Profile Routes
Route::get('/doctor/my_profile', 'DoctorProfilesController@index')->name('doc_profile');
Route::get('/doctor/my_profile/create', 'DoctorProfilesController@create')->name('doc_profile_create');
Route::post('/doctor/my_profile', 'DoctorProfilesController@store');
Route::get('/doctor/my_profile/edit/{id}', 'DoctorProfilesController@edit')->name('doc_profile_edit');
Route::put('/doctor/my_profile/{id}', 'DoctorProfilesController@update');

// Doctor Specialities Routes
Route::get('/doctor/my_specialities', 'DoctorSpecialitiesController@index')->name('doc_specialities');
Route::post('/doctor/my_specialities', 'DoctorSpecialitiesController@store');
Route::delete('/doctor/my_specialities/{id}', 'DoctorSpecialitiesController@destroy');

// Doctor Chambers Routes
Route::get('/doctor/my_chambers', 'ChambersController@index')->name('doc_chambers');
Route::get('/doctor/my_chambers/new_chamber', 'ChambersController@create')->name('new_chamber');
Route::post('/doctor/my_chambers', 'ChambersController@store');

// Doctor Schedules Routes
Route::get('/doctor/my_schedules', 'SchedulesController@index')->name('doc_schedules');
Route::get('/doctor/my_schedules/new_schedule', 'SchedulesController@create')->name('new_schedule');
Route::post('/doctor/my_schedules', 'SchedulesController@store');


////////////////////// Admin Panel /////////////////////
// Login Routes
Route::get('/admin/login', 'AdminAuthController@login');
Route::post('/admin/login', 'AdminAuthController@postLogin')->name('admin_post_login');

// Dashboard Route
Route::get('/admin/dashboard', 'AdminHomeController@index')->name('admin_dashboard');

