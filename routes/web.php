<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/','indexController@index');
Route::get('/page/{id}','indexController@page');
Route::get('/log',function (){
    return view('login.login');
});

Route::get('/blank', 'DashboardController@blank');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/addStudent', 'DashboardController@addStudent');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/creatLectureIndex', 'DashboardController@creatLectureIndex');
Route::get('/dashboard/students', 'DashboardController@students');
Route::get('/dashboard/lectureDetail', 'DashboardController@lectureDetail');


Route::post('/dashboard/creatLecture', 'DashboardController@creatLecture');
Route::get('/dashboard/viewLecture/{id}', 'DashboardController@viewLecture');
Route::get('/dashboard/editLecture/{id}', 'DashboardController@editLecture');
Route::put('/dashboard/updateLecture/{id}', 'DashboardController@updateLecture');
Route::get('/dashboard/deleteLecture/{id}','DashboardController@deleteLecture');


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
