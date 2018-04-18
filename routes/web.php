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

Route::get('/index', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/musiques_du_moment', function () {
    return view('musiques_du_moment');
});

Route::get('/genre', function () {
    return view('genre');
});

Route::get('/playlist', function () {
    return view('playlist');
});

Route::get('/ajouter_music', function () {
    return view('ajouter_music');
});

Route::get('/ajoutermamusic', function () {
    return view('ajouter_music');
});
