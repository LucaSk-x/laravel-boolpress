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

Route::middleware('auth')
    ->namespace("Admin")
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/', 'HomeController@index')->name('index');
        Route::resource('/posts', 'PostController');
        

        Route::get('/users', 'UserController@index')->name('users.index');
        Route::patch('/users/{user}', 'UserController@update')->name('users.update');
        Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
    });

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{any?}', function() {return view("welcome");
  })->where("any", ".*");
