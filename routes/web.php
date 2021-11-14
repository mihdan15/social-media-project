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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('home.index1');
});


Route::get('/profile', function () {
    return view('profil.profile');
});


//CRUD Profile
Route::resource('profile', 'ProfileController')->only(['index', 'edit', 'update']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//CRUD Postingan
Route::resource('Postingan','PostinganController');


//CRUD Komen
Route::resource('komen', 'KomenController')->only([
    'store'
]);
