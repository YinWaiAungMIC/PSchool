<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('student','StudentController');
Route::resource('teacher','TeacherController');
Route::resource('parents','ParentsController');
Route::resource('classes','GradeController');
Route::resource('subject','SubjectController');
Route::get('assign-subject-to-class/{id}', 'GradeController@assignSubject')->name('class.assign.subject');

 Route::post('assign-subject-to-class/{id}', 'GradeController@storeAssignedSubject')->name('store.class.assign.subject');
