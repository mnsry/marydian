<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('page', function () {
    return view('welcome');
})->name('page');

Route::get('contactus', function () {
    return view('welcome');
})->name('contactus');

Route::get('aboutme', function () {
    return view('welcome');
})->name('aboutme');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
