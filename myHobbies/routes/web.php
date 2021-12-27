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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::group(['prefix' => "app"], function () {
    Route::get('/', function () {
        return view('starting_page');
    })->name("app.home");

    Route::get('/info', function () {
        return view('info');
    })->name("app.info");
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
