<?php

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', 'TournamentController@index') -> name('home');
Route::get('/tournaments/create', 'TournamentController@create');
Route::get('/tournaments/{tournament}', 'TournamentController@show');
Route::get('/tournaments/{tournament}/edit', 'TournamentController@edit');
Route::post('/tournaments', 'TournamentController@store');
Route::put('/tournaments', 'TournamentController@update');

Route::get('/users/{id}', 'UserController@show');
Route::get('/me', 'UserController@me');

Auth::routes();
