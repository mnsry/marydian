<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('mobile', function (\Illuminate\Http\Request $request) {
    $request->validate(
        ['mobile_new' => 'required|unique:mobiles|digits:11'],
        ['required' => 'نباید فرم خالی باشد', 'unique' => 'این شماره قبلا ثبت شده', 'digits' => 'شماره باید با صفر وارد شود و بیش از 11 رقم نباشد',]
    );
    \App\Models\Mobile::create(['mobile_new' => $request->mobile_new]);
    return back();
})->name('mobile.new');

Route::get('page', function () {
    return view('page.index');
})->name('page');

Route::get('page/{page}', function (\TCG\Voyager\Models\Page $page) {
    return view('page.show', [ 'page'=>$page]);
})->name('page.show');

Route::get('contactus', function () {
    return view('contactus');
})->name('contactus');

Route::post('contactus', function (\Illuminate\Http\Request $request) {
    \App\Models\Contact::create($request->all());
    return back();
})->name('contactus.create');

Route::get('aboutme', function () {
    return view('aboutme');
})->name('aboutme');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('category/{category}', function (\TCG\Voyager\Models\Category $category) {
    return view('post.category', ['category'=>$category]);
})->name('category')->middleware('auth');

Route::get('post/{post}', function (\TCG\Voyager\Models\Post $post) {
    return view('post.show', [ 'post'=>$post]);
})->name('post.show')->middleware('auth');

Route::get('download/{post}', function (\TCG\Voyager\Models\Post $post) {
    $user = auth()->user();
    $pay = $user->many - setting('site.price_download');

    if ( $pay >= 0) {
        $user->many = $pay;
        $user->save();
    } else {
        Session::flash('message', 'موجودی کافی نیست !');
        return back();
    }

    $file = json_decode($post->pdf)[0];
    $file_path = $file->download_link;
    return redirect(Voyager::image($file_path));
})->name('download')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
