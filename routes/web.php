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

Route::get('/exe1', function () {
    return view('exe1')->with('nav',file_get_contents(__DIR__."/../resources/views/navbar.html"));
});

Route::get('/lienhe', function () {
    return view('lienhe')->with('nav',file_get_contents(__DIR__."/../resources/views/navbar.html"));
});

Route::get('/gioithieu', function () {
    return view('gioithieu')->with('nav',file_get_contents(__DIR__."/../resources/views/navbar.html"));
});

Route::get('/ban', function () {
    return view('ban')->with('nav',file_get_contents(__DIR__."/../resources/views/navbar.html"));
});

Route::get('/ghe', function () {
    return view('ghe')->with('nav',file_get_contents(__DIR__."/../resources/views/navbar.html"));
});

Route::get('/exe2', function () {
    return view('exe2');
});
