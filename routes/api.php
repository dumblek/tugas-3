<?php

Route::namespace('Auth')->group(function(){
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::middleware('auth:api')->group(function(){
    Route::post('mahasiswa', 'MahasiswaController@store');
});

Route::get('mahasiswa/{mahasiswa}', 'MahasiswaController@show');