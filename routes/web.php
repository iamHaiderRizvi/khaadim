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

Route::get('/header', function () {
    return view('includes/header');
});

Route::get('/footer', function () {
    return view('includes/footer');
});

//Cause:
Route::get('/cause', function () {
    return view('pages/causes/cause');
});

//How It's Work:
Route::get('/work', function () {
    return view('pages/works/work');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
