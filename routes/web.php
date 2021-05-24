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
    return view('index');
})->middleware('auth');;
Route::get('/index', function () {
    return view('index');
})->middleware('auth');;


Auth::routes();

Route::get('/   ', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/sony', function () {
    return view('sony');
})->middleware('auth');;
Auth::routes();
Route::get('/microsoft', function () {
    return view('microsoft');
})->middleware('auth');;
Auth::routes();
Route::get('/pc', function () {
    return view('pc');
})->middleware('auth');;
Auth::routes();
Route::get('/contactus', function () {
    return view('contactus');
})->middleware('auth');;

Route::get('/api', function () {
    return view('api');
})->middleware('auth');;