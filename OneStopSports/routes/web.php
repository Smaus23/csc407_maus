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
Route::get('/mens2', 'MensApparelController@index');
Route::get('/womens2', 'WomansApparelController@index');
Route::get('/children2', 'ChildrenApparelController@index');
Route::get('/sportsspecific-football2', 'FootballApparelController@index');
Route::get('/sportsspecific-baseball2', 'BaseballApparelController@index');
Route::get('/sportsspecific-basketball2', 'BasketballApparelController@index');
Route::get('/sportsspecific-cheerleading2', 'CheerleadingApparelController@index');
Route::get('/sportsspecific-soccer2', 'SoccerApparelController@index');
Route::get('/sportsspecific-softball2', 'SoftballApparelController@index');
Route::get('/sportsspecific-track2', 'TrackApparelController@index');
Route::get('/sportsspecific-volleyball2', 'VolleyballApparelController@index');

Route::resource('mens', 'MensApparelController');
Route::resource('womens', 'WomansApparelController');
Route::resource('children', 'ChildrenApparelController');
Route::resource('sportsspecific-football', 'FootballApparelController');
Route::resource('sportsspecific-baseball', 'BaseballApparelController');
Route::resource('sportsspecific-basketball', 'BasketballApparelController');
Route::resource('sportsspecific-cheerleading', 'CheerleadingApparelController');
Route::resource('sportsspecific-soccer', 'SoccerApparelController');
Route::resource('sportsspecific-track', 'TrackApparelController');
Route::resource('sportsspecific-softball', 'SoftballApparelController');
Route::resource('sportsspecific-volleyball', 'VolleyballApparelController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

//Route::get('/mens', function () {
//    return view('mens');
//});

//Route::get('/womens', function () {
 //   return view('womens');
//});

//Route::get('/children', function () {
//    return view('children');
//});


Route::get('/sportsspecific', function () {
    return view('sportsspecific');
});

//Route::get('/sportsspecific-football', function () {
//    return view('sportsspecific-football');
//});

//Route::get('/sportsspecific-baseball', function () {
  //  return view('sportsspecific-baseball');
//});

//Route::get('/sportsspecific-basketball', function () {
  //  return view('sportsspecific-basketball');
//});

//Route::get('/sportsspecific-cheerleading', function () {
  //  return view('sportsspecific-cheerleading');
//});

//Route::get('/sportsspecific-soccer', function () {
  //  return view('sportsspecific-soccer');
//});

//Route::get('/sportsspecific-softball', function () {
  //  return view('sportsspecific-softball');
//});

//Route::get('/sportsspecific-track', function () {
  //  return view('sportsspecific-track');
//});

//Route::get('/sportsspecific-volleyball', function () {
  //  return view('sportsspecific-volleyball');
//});


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


