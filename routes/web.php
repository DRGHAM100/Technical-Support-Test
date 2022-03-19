<?php

use Illuminate\Support\Facades\Route;

Route::resource('/','App\Http\Controllers\RegisteredController');

Auth::routes(['register' => false]);

Route::resource('/{page}','App\Http\Controllers\HomeController');
Route::post('/change/{id}',[App\Http\Controllers\HomeController::class,'changeSeat']);





