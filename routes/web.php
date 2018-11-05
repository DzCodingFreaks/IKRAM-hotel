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

Route::get('/', 'homeController@index');

Route::get('/services', function () {
    return view('services');
});

Route::get('/gallerie', 'galleryController@getPhotos' );

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/apropos', function () {
    return view('apropos');
});

//dashboard routes 

Route::get('/admin', 'AdminController@index');

Route::get('/account', 'AdminController@account');

Route::get('/gallery', 'AdminController@gallery' );

Route::post('/updateUserInfo','adminController@updateUserInfo');

Route::post('/updateUserPassword','adminController@updateUserPassword');

// gallery routes

Route::post('/images-save', 'galleryController@store');

Route::post('/images-delete', 'galleryController@destroy');

Route::post('/images-update', 'galleryController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
