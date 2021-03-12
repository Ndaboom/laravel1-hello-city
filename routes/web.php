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
use App\Http\Controllers\UserAuth;

Route::get('/', function () {
    return view('pages.home');
})->name('root_path');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('home_page');

Route::post("user", [UserAuth::class,'userLogin']);

Route::get('/login', function () {
    if(session()->has('user'))
    {
        return  view('pages.profile');
    }
    return view('pages.login');
})->name('login_page');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile_page');

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return view('pages.login');
});

Route::get('/help', function () {
    
    return view('pages.help');
})->name('help_page');
