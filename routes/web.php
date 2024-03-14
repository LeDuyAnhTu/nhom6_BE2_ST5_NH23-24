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

Route::post('/demo', function () {
    return view('demo');
})->middleware('checkname');


Route::get('/checkage/{age}', function ($age) {
    return 'Ban da du tuoi de truy cap trang web nay';
})->name('checkage')->whereNumber('age')->middleware('checkage');

Route::group(['as' => 'name.'], function () {
    Route::get('/{name?}', function ($name = 'trangchu') {
        return view($name);
        // ->with('nav', file_get_contents(__DIR__ . "/../resources/views/navbar.blade.php"));
    })->name('view');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/xinchao/{name?}',function($name="22211TT0024") {
    return view('demo')->with('name',$name);
})->where('name','[0-9]{2}[2-5]11[A-Z]{2}[0-9]{4}');


// Route::get('/{name?}',function($name="22211TT0024") {
//     return view('demo')->with('name',$name);
// });
