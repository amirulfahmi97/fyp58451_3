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
    return view('global.home');
});
Route::get('/userlogin','GlobalLoginController@showloginform')->name('globalloginform');
Route::post('/userlogin','GlobalLoginController@loginform')->name('globalsubmitlogin');
Auth::routes();

Route::get('/admin/dashboard','AdminController@dashboard')->name('admindashboard')->middleware('is_admin');
Route::get('/admin/controluser','AdminController@controluser')->name('controluser')->middleware('is_admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teacher/dashboard','TeacherController@dashboard')->name('teacherdashboard')->middleware('is_teacher');
Route::get('/parent/dashboard','ParentController@dashboard')->name('parentdashboard')->middleware('is_parent');
Route::resource('/admin','AdminController')->middleware('is_admin');
Route::post('globalogout','GlobalLoginController@globallogout')->name('globallogout');

Route::prefix('teacher')->group(function () {
   Route::get('profile/{id}','TeacherController@profile')->name('teacherprofile')->middleware('is_teacher');
   Route::patch('update/{id}','TeacherController@updateprofile')->name('updateprofile')->middleware('is_teacher');
});
