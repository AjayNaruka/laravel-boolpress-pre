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

Route::get('/', 'PageController@index'); // controllo rotte statiche classico
Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/','HomeController@index')->name('home');
        Route::get('/logout','HomeController@logout')->name('logout');
        Route::resource('/posts','PostController');
    });

Auth::routes();
Route::get('{any?}', 'PageController@index')->where('any','.*');

//Route::get('/home', 'HomeController@index')->name('home');
