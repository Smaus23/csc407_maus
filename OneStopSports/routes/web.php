<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/mens', function () {
    return view('mens');
});

Route::get('/womens', function () {
    return view('womens');
});

Route::get('/children', function () {
    return view('children');
});


Route::get('/sportsspecific', function () {
    return view('sportsspecific');
});

Route::get('/sportsspecific-football', function () {
    return view('sportsspecific-football');
});

Route::get('/sportsspecific-baseball', function () {
    return view('sportsspecific-baseball');
});

Route::get('/sportsspecific-basketball', function () {
    return view('sportsspecific-basketball');
});

Route::get('/sportsspecific-cheerleading', function () {
    return view('sportsspecific-cheerleading');
});

Route::get('/sportsspecific-soccer', function () {
    return view('sportsspecific-soccer');
});

Route::get('/sportsspecific-softball', function () {
    return view('sportsspecific-softball');
});

Route::get('/sportsspecific-track', function () {
    return view('sportsspecific-track');
});

Route::get('/sportsspecific-volleyball', function () {
    return view('sportsspecific-volleyball');
});


Route::get('/localteams', function () {
    return view('localteams');
});

Route::get('/sponsorship', function () {
    return view('sponsorship');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});

Route::get('/contactus', function () {
    return view('contactus');
});


