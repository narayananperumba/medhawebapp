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
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact','ContactController@contact');

Route::post('/contact', 'ContactController@sendMail');

Route::post('/gettouch', 'ContactController@sendMail');

Route::get('/services', function () {
    return view('services');
});


Route::get('/aboutteam', function () {
    return view('aboutteam');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/career', function () {
    return view('career');
});


// Route::get('/blog', function () {
//     return view('blog');
// });
