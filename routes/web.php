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
Route::get('/admin/dashboard','AdminController@dashboard')->name('admindashboard')->middleware('is_admin');
Route::get('/admin/controluser','AdminController@controluser')->name('controluser')->middleware('is_admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teacher/dashboard','TeacherController@dashboard')->name('teacherdashboard')->middleware('is_teacher');
Route::get('/parent/dashboard','ParentController@dashboard')->name('parentdashboard')->middleware('is_parent');
Route::resource('/admin','AdminController')->middleware('is_admin');

Route::prefix('admin')->group (function (){


});

