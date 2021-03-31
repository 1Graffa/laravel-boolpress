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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

// Route::get('home', 'HomeController@index')->name('home')->middleware('auth');
// la forma seguente è preferita per non ripetere il prefisso del percorso volta in volta
Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});