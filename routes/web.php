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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','roleMiddleware'])->group(function(){
    Route::get('/route-1','RoleController@route_1');
    Route::get('/route-2','RoleController@route_2');
    Route::get('/route-3','RoleController@route_3');
});


