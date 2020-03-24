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
Auth::routes(); 
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('services');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/templates', function () {
    return view('templates');
});
Route::get('/pakage', function () {
    return view('pakages');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/wp-admin', function () {
    return view('dash');
});
Route::post('/contact/send', 'HomeController@send');



//Route::get('/home', 'HomeController@index')->name('home');
