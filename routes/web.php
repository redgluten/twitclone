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
    $tweets = App\Tweet::orderBy('created_at', 'desc')->get();

    return view('index', ['tweets' => $tweets]);
});

Route::get('tweets/create', 'TweetsController@create');
Route::post('tweets', 'TweetsController@store');
Route::get('tweets/', 'TweetsController@index');
Route::get('tweets/{id}/edit', 'TweetsController@edit');
Route::put('tweets/{tweet}', 'TweetsController@update');
Route::delete('tweets/{tweet}', 'TweetsController@destroy');

Route::get('/a-propos', function () {
    return 'Ce clone de Twitter vous est proposé par Laravel et Open School Design';
});

Route::get('/contact', function () {
    return 'Écrivez nous à exemple@exemple.org';
});

Route::post('/contact', function () {
    return 'Désolé le formulaire de contact n’est pas encore prêt';
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
