<?php

use \App\Http\Controllers;
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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('/request' , '\App\Http\Controllers\RequestController');
Route::resource('/meet' , '\App\Http\Controllers\MeetController');
Route::resource('/member' , '\App\Http\Controllers\MemberController');
