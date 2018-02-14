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

Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');


Route::get('/contact', 'Contact\ContactController@getContactForm')->name('contact.get');

Route::post('/contact', 'Contact\ContactController@postContactForm')->name('contact.post');


Route::get('/products-amu-coating', 'PagesController@getProductsAmu');

Route::get('/products-roof-coating', 'PagesController@getProductsRoof');


Route::get('/future-products', 'PagesController@getFutureProducts');


Route::get('/performance-test', 'PagesController@getPerformanceTest');

Route::get('/', 'PagesController@getHome');
