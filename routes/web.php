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
    return view('accueil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('utilisateur', 'UtilisateurController');

Route::post('update-user','UtilisateurController@update');

Route::get('search', 'AnnonceController@search');

Route::resource('annonce', 'AnnonceController');

/* login user route*/
Route::get('/log-in', function () {
    return view('utilisateur.loginuser');
});

Route::get('/logout', 'UtilisateurController@logout');


Route::get('/edituser', 'UtilisateurController@showedit');


Route::post('authuser','UtilisateurController@loginuser');
