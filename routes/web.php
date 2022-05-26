<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('welcome');
});

route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

route::group(['middleware' => ['auth']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
});

