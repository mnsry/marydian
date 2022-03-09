<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('page', function () {
    return view('page.index');
})->name('page');

Route::get('contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('aboutme', function () {
    return view('aboutme');
})->name('aboutme');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
