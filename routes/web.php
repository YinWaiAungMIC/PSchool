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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','FrontendController@front');

Route::group(['middleware' => ['auth','role:Admin']], function () 
{
Route::resource('student','StudentController');
Route::resource('teacher','TeacherController');
Route::resource('parents','ParentsController');
Route::resource('classes','GradeController');
Route::resource('subject','SubjectController');
Route::resource('timetable','TimeTableController');
Route::get('assign-subject-to-class/{id}', 'GradeController@assignSubject')->name('class.assign.subject');

 Route::post('assign-subject-to-class/{id}', 'GradeController@storeAssignedSubject')->name('store.class.assign.subject');
Route::get('attendance', 'AttendanceController@index')->name('attendance.index');
});

Route::group(['middleware' => ['auth','role:Teacher']], function () 
{
Route::post('attendance', 'AttendanceController@store')->name('teacher.attendance.store');
Route::get('attendance-create/{classid}', 'AttendanceController@createByTeacher')->name('teacher.attendance.create');

});

Route::group(['middleware' => ['auth','role:Parent']], function () 
{
Route::get('attendance/{attendance}', 'AttendanceController@show')->name('attendance.show');
});