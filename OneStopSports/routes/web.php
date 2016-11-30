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

Route::get('/mens/addtocart/{id}', 'MensApparelController@addToCart');
Route::resource('mens', 'MensApparelController');

Route::get('/womens/addtocart/{id}', 'WomansApparelController@addToCart');
Route::resource('womens', 'WomansApparelController');

Route::get('/children/addtocart/{id}', 'ChildrenApparelController@addToCart');
Route::resource('children', 'ChildrenApparelController');

Route::get('/sportsspecific-football/addtocart/{id}', 'FootballApparelController@addToCart');
Route::resource('sportsspecific-football', 'FootballApparelController');

Route::get('/sportsspecific-baseball/addtocart/{id}', 'BaseballApparelController@addToCart');
Route::resource('sportsspecific-baseball', 'BaseballApparelController');

Route::get('/sportsspecific-basketball/addtocart/{id}', 'BasketballApparelController@addToCart');
Route::resource('sportsspecific-basketball', 'BasketballApparelController');

Route::get('/sportsspecific-cheerleading/addtocart/{id}', 'CheerleadingApparelController@addToCart');
Route::resource('sportsspecific-cheerleading', 'CheerleadingApparelController');

Route::get('/sportsspecific-soccer/addtocart/{id}', 'SoccerApparelController@addToCart');
Route::resource('sportsspecific-soccer', 'SoccerApparelController');

Route::get('/sportsspecific-track/addtocart/{id}', 'TrackApparelController@addToCart');
Route::resource('sportsspecific-track', 'TrackApparelController');

Route::get('/sportsspecific-softball/addtocart/{id}', 'SoftballApparelController@addToCart');
Route::resource('sportsspecific-softball', 'SoftballApparelController');

Route::get('/sportsspecific-volleyball/addtocart/{id}', 'VolleyballApparelController@addToCart');
Route::resource('sportsspecific-volleyball', 'VolleyballApparelController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/sportsspecific', function () {
    return view('sportsspecific');
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

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/shoppingcart', function () {
    return view('shoppingcart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contactus', function () {
    return view('contactus');
});


