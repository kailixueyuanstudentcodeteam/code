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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'StudentController@ScoreIndex');
// Route::get('/baseinfo', 'StudentController@baseinfo_stu');
Route::post('/baseinfo', 'StudentController@baseinfo_stu_option');
Route::post('/baseinfo_F4', 'StudentController@baseinfo_stu_option_F4');
Route::post('/submitinfo', 'StudentController@allinfo_stu');
//Route::get('/home', 'Student\StudentScoreController@ScoreCal');
// Route::get('/home', 'HomeController@index')->name('home');