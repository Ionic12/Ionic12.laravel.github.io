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
    return view('urwelcome');
});
Route::get('/urwelcome', function () {
    return view('urwelcome');
});
Route::get('/aboutme', function () {
    return view('aboutme');
});
Route::get('/comingsoon', function () {
    return view('comingsoon');
});
