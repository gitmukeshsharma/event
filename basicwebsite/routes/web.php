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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/event', function () {
    return view('CreateEvent');
});
Route::get('/register', function () {
    return view('registration');
});
Route::get('/records', function () {
    return view('records');
});
Route::get('/ritesh', function () {
    return view('ritesh');
});
Route::get('/attendence', function () {
    return view('attendence');
});
Route::get('/mukesh', function () {
    return view('mukesh');
});
Route::get('/search', function () {
    return view('search');
});