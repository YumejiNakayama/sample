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

// use App\Http\Middleware\HelloMiddleware;

use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     return view('hello.index');
// });

Route::get('hello', 'hellocontroller@index');

Route::post('hello', 'hellocontroller@post');

Route::get('hello', 'hellocontroller@index')->middleware('helo');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'hellocontroller@create');
