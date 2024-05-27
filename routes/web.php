<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;

Route::groupe([

],function(){


});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


