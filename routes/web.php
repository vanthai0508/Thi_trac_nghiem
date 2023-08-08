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
    return view('welcome');
});

Route::post('login', "App\Http\Controllers\AuthController@login");

Route::get('home', "App\Http\Controllers\Phim2Controller@listPhim");

Route::get('listPhim', "App\Http\Controllers\PhimController@list");

// Route::get('viewCreatePhim', "App\Http\Controllers\PhimController@viewCreatePhim");
// Route::post('createPhim', "App\Http\Controllers\PhimController@create");

// Route::put('updatePhim/{id}', "App\Http\Controllers\PhimController@update");
// Route::get('findPhim/{id}', "App\Http\Controllers\PhimController@find");

// Route::get('deletePhim/{id}', "App\Http\Controllers\PhimController@delete");

Route::get('/token', function () {
    return [ "token" => csrf_token() ]; 
});

Route::get('day1', "App\Http\Controllers\Phim2Controller@getTen");

Route::post('create', "App\Http\Controllers\Phim2Controller@createPhim");

Route::get('returnCreate', "App\Http\Controllers\Phim2Controller@returnCreate");

Route::get('returnViewUpdate/{id}',  "App\Http\Controllers\Phim2Controller@returnUpdate");

Route::PUT('update/{id}',  "App\Http\Controllers\Phim2Controller@update");

Route::get('delete/{id}',  "App\Http\Controllers\Phim2Controller@delete");