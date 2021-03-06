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
Route::get('/frontend', function () {
    return view('frontend');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/motor', 'MotorController');
Route::resource('/admin/pembeli', 'PembeliController');
Route::resource('/admin/kriditpaket', 'kriditpaketController');
Route::resource('/admin/belikridit', 'belikriditController');
Route::resource('/admin/belicash', 'belicashController');
Route::resource('/admin/bayarcicilan', 'bayarcicilanController');
