<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Front Routes

Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/appartements', 'Front\AppartementController@index')->name('appartements');
Route::get('/contact', 'Front\ContactController@index')->name('contact');
Route::get('/galerie', 'Front\GalerieController@index')->name('galerie');
Route::post('/text/edit', 'Front\TextController@edit')->name('textEdit');


//Admin Routes

Route::post('/admin/login', 'Auth\LoginController@login')->name('login');
Route::get('/admin/login',  'Auth\LoginController@showLoginForm')->name('auth.login');
Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'Admin\HomeController@index')->name('adminHome');


Route::get('/admin/users', 'Admin\UserController@index')->name('users');
Route::post('/admin/users', 'Admin\UserController@create');
Route::get('/admin/users/drop/{id}', 'Admin\UserController@delete')->name('dropUser');

Route::get('/admin/tags', 'Admin\TagController@index')->name('tags');
Route::post('/admin/tags', 'Admin\TagController@create');
Route::get('/admin/tags/drop/{id}', 'Admin\TagController@delete')->name('dropTag');
Route::post('/admin/tags/edit/{id}', 'Admin\TagController@edit')->name('editTag');

Route::get('/admin/apparts', 'Admin\AppartController@index')->name('apparts');
Route::post('/admin/apparts', 'Admin\AppartController@create');
Route::get('/admin/apparts/drop/{id}', 'Admin\AppartController@delete')->name('appartsTag');
Route::post('/admin/apparts/edit/{id}', 'Admin\AppartController@edit')->name('appartsTag');


Route::get('/admin/gallery', 'Admin\GalleryController@index')->name('gallery');
Route::get('/admin/gallery/drop/{id}', 'Admin\GalleryController@delete')->name('dropGallery');
Route::get('/admin/gallery/restore/{id}', 'Admin\GalleryController@restore')->name('restoreGallery');
Route::post('/admin/gallery/store', 'Admin\GalleryController@store')->name('storeGallery');
Route::post('/admin/gallery/upload', 'Admin\GalleryController@upload')->name('uploadGallery');

