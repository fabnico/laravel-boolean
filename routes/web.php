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
    return view('home');
})->name('home');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/dopo_corso', function () {
    return view('dopo_corso');
})->name('dopo_corso');

Route::get('/camp', function () {
    return view('camp');
})->name('camp');

Route::get('/candidati', function () {
    return view('candidati');
})->name('candidati');

Route::get('/utenti', "MyController@check")->name("utenti");

Route::get('/utenti/{id}', 'MyController@show')->name("users.show");
