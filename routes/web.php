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
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::post("user", [UserAuth::class,'userLogin']);

Route::get('/login', function () {
    if(session()->has('user'))
    {
        return  redirect('pages.profile');
    }
    return view('pages.login');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return view('pages.login');
});
