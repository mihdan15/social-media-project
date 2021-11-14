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
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home.index1');
    });

});

Route::get('/profile', function () {
    return view('profil.profile');
});

//CRUD Profile
Route::resource('profile', 'ProfileController')->only(['index', 'edit', 'update']);

//CRUD Post
Route::get('/post','PostController@index');
Route::post('/post', 'PostController@store')->middleware('auth');

//postingan
Route::resource('postingan', 'PostinganController')->only(['store']);

//CRUD Komen
Route::resource('komen', 'KomenController')->only([
    'store'
]);
