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

Route::get('/','SitesController@index')->name('sites.home');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/notice/{slug}','HomeController@notice')->name('home.notice');
Route::get('/notices','HomeController@notices')->name('home.notices');
Route::get('/championships','HomeController@championships')->name('home.championships');
Route::get('/championship/{id}','HomeController@championship')->name('home.championship');
Route::get('/clubes','HomeController@clubes')->name('home.clubes');
Route::post('/custom_register','HomeController@custom_register')->name('home.custom_register');
Route::post('/custom_login','HomeController@custom_login')->name('home.custom_login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::resource('regions','RegionsController');
	Route::resource('cities','CitiesController');
	Route::resource('tags','TagsController');
	Route::resource('clubes','ClubesController');
	Route::get('/clubes/delete_logo/{id}','ClubesController@delete_logo');
	Route::get('/clubes/delete_cover/{id}','ClubesController@delete_cover');
	Route::resource('payment_methods','PaymentMethodsController');
	Route::resource('player_categories','PlayerCategoriesController');
	Route::resource('notice_categories','NoticeCategoriesController');
	Route::resource('products','ProductsController');
	Route::resource('notices','NoticesController');
	Route::get('/notices/delete_avatar/{id}','NoticesController@delete_avatar');
	Route::resource('championships','ChampionshipsController');
	Route::resource('games','GamesController');
	Route::get('/sites/edit','SitesController@edit')->name('sites.edit');
	Route::put('/sites/update','SitesController@update')->name('sites.update');
	Route::get('/sites/drop_image/{image}','SitesController@drop_image')->name('sites.drop_image');
	Route::resource('users','UsersController');
	Route::get('/users/profile','UsersController@profile')->name('users.profile');
	Route::resource('payments','PaymentsController');
	Route::get('/payments/my_subscriptions','PaymentsController@my_subscriptions')->name('payments.my_subscriptions');
});
Route::get('admin/cities/getCities/{id}','CitiesController@getCities');