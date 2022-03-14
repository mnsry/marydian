<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('page', function () {
    return view('page.index');
})->name('page');

Route::get('page/{page}', function (\TCG\Voyager\Models\Page $page) {
    return view('page.show', [ 'page'=>$page]);
})->name('page.show');

Route::get('contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('aboutme', function () {
    return view('aboutme');
})->name('aboutme');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('post/{post}', function (\TCG\Voyager\Models\Post $post) {
    return view('post.show', [ 'post'=>$post]);
})->name('post.show')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
