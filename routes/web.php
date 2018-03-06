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


Route::get('/search', 'PagesController@getSearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\AdminController@getIndex')->name('adminindex');

Route::get('/admin/user/edit-users', 'Admin\AdminController@getUsers')->name('get-users');
Route::get('/admin/user/edit/{id}', 'Admin\AdminController@editUser')->name('edit-user');

Route::post('/admin/user/edit/edituserprocess', 'Admin\AdminController@editUserProcess');
Route::post('/admin/user/edit/edituserpassword', 'Admin\AdminController@editUserPassword');
Route::post('/admin/user/adduserprocess', 'Admin\AdminController@addUserProcess');

Route::get('/location', 'PagesController@getLocation');

Route::get('/admin/content/add', 'Admin\AdminController@addContent');
Route::get('/admin/content/{category}', 'Admin\AdminController@getContent');
Route::get('/admin/content/edit/{id}', 'Admin\AdminController@editContent');
Route::post('/admin/content/editcontentprocess', 'Admin\AdminController@editContentProcess');
Route::post('/admin/content/addcontentprocess', 'Admin\AdminController@addContentProcess');

Route::get('/admin/contact/contact-form', 'Contact\AdminController@getContactForm');
Route::get('/admin/contact/address', 'Contact\AdminController@getAddress');
Route::get('/admin/contact/messages', 'Contact\AdminController@getMessages');
Route::post('/admin/contact/contact-form', 'Contact\AdminController@postContactForm')->name('admin.contact.contact-form.post');
Route::post('/admin/contact/address', 'Contact\AdminController@postAddress')->name('admin.contact.address.post');
Route::get('/admin/contact/message/{id}', 'Contact\AdminController@getMessage');
