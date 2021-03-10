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
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::post("user", [UserAuth::class,'userLogin']);

Route::get('/login', function () {
    if(session()->has('user'))
    {
        return  redirect('profile');
    }
    return redirect('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});
