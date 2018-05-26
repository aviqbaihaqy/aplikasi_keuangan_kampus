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

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/mahasiswa','MahasiswaController@index')->name('mahasiswa');
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 3982a421943dd1a900405c7a0e70043a44adebf2
