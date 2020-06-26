<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::get('home', function () {
    return view("home");
});

Route::get('login', function () {
    return view("login");
});

Route::get('levenement', function () {
    return view("levenement");
});

Route::get('reservation', function () {
    return view("reservation");
});

Route::get('creecompte', function () {
    return view("creecompte");
});

Route::get('confirmation', function () {
    return view("confirmation");
});

Route::get('compte', function () {
    return view("compte");
});

Route::get('mesattentes', function () {
    return view("mesattentes");
});
Route::get('wishlist', function () {
    return view("wishlist");
});

Route::get('review', function () {
    return view("review");
});

Route::resource('Products', 'ProductController', ['except'=>['show','edit','update']]);

Route::get('catalogue', 'ProductController@affiche');




Route::get('product/{product}', 'ProductController@afficheproduit');

Route::get('newproduct', 'ProductController@create');

/* Route::get('import_data', 'ProductController@uploadFile'); */

