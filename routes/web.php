<?php

Route::get('/', function () {
    return Redirect::to('/home');
});
Route::get('/home', 'TournamentController@index') -> name('home');
Route::get('/tournaments/create', 'TournamentController@create');
Route::get('/tournaments/{tournament}', 'TournamentController@show');
Route::get('/tournaments/{tournament}/edit', 'TournamentController@edit');
Route::post('/tournaments', 'TournamentController@store');
Route::put('/tournaments/{tournament}', 'TournamentController@update');
Route::delete('/tournaments/{tournament}', 'TournamentController@destroy');

Route::get('/users/{id}', 'UserController@show');
Route::get('/me', 'UserController@me');

Route::post('/tournaments/{tournament}/users', 'SignUpController@create');
Route::delete('/tournaments/{tournament}/users', 'SignUpController@destroy');

Route::post('/tournaments/{tournament}/start', 'TournamentController@start');

Route::post('/tournaments/matches/{match}/score', 'MatchController@addScore');

Auth::routes();
