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
    return redirect()->route('home');
});

Route::get('/add_activity', 'HomeController@add_activity')->name('add_activity');
Route::get('/submit_activity', 'HomeController@submit_activity')->name('submit_activity');
Route::get('/homepagestudent', 'HomeController@homepagestudent')->name('homepagestudent');

/*Staff page*/
Route::get('/staff_page', 'HomeController@staff_page')->name('staff_page');

/* 
Route::get('/about-me', 'PageController@aboutMe')->name('about-me');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
