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
Route::get('/site','SitesController@index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/notice/{slug}','HomeController@notice')->name('home.notice');
Route::get('/notices','HomeController@notices')->name('home.notices');
Route::get('/championships','HomeController@championships')->name('home.championships');
Route::get('/championship/{id}','HomeController@championship')->name('home.championship');
Route::get('/clubes','HomeController@clubes')->name('home.clubes');
Route::get('/club/{slug}','HomeController@club')->name('home.club');
Route::get('/profile/{id}','HomeController@profile')->name('home.profile');
Route::get('/galleries','HomeController@galleries')->name('home.galleries');
Route::post('/custom_register','HomeController@custom_register')->name('home.custom_register');
Route::post('/custom_login','HomeController@custom_login')->name('home.custom_login');
Route::get('/ranking','SitesController@ranking')->name('site.ranking');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::resource('regions','RegionsController');
	Route::resource('cities','CitiesController');
	Route::resource('services','ServicesController');
	Route::resource('tags','TagsController');
	Route::resource('clubes','ClubesController');
	Route::resource('staffs','StaffsController');
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
	Route::put('/users/update_admin/{id}','UsersController@update_admin')->name('users.update_admin');
	Route::get('/users/user_profile/{id}','UsersController@user_profile')->name('users.user_profile');
	Route::put('/users/change_password/{id}','UsersController@change_password')->name('users.change_password');

	Route::get('/users/delete_profile_image/{id}','UsersController@delete_profile_image')->name('users.delete_profile_image');

	Route::get('/users/player_to_site/{id}','UsersController@player_to_site')->name('users.player_to_site');
	Route::get('/users/player_to_chmp/{user_id}/{championship_id}/{player_category_id}','UsersController@player_to_chmp')->name('users.player_to_chmp');

	Route::resource('payments','PaymentsController');
	Route::get('/payments/my_payments/{id}','PaymentsController@my_payments')->name('payments.my_payments');

	Route::get('/payments/subscribe_to_site/{id}','PaymentsController@subscribe_to_site')->name('payments.subscribe_to_site');

	Route::get('/payments/subscribe_to_championship/{id}/{championship_id}','PaymentsController@subscribe_to_championship')->name('payments.subscribe_to_championship');

	Route::get('/payments/aproved_payment/{id}','PaymentsController@aproved_payment')->name('payments.aproved_payment');

	Route::get('/payments/deaproved_payment/{id}','PaymentsController@deaproved_payment')->name('payments.deaproved_payment');
	Route::resource('galleries','GalleriesController');
	Route::get('/rankings','RankingsController@index')->name('rankings.index');
	Route::post('/rankigs/store','RankingsController@store')->name('rankings.store');
	Route::get('/rankings/players-by-category/{championship_id}/{player_category_id}','RankingsController@playersbycategory')->name('rankings.player-by-category');
});
Route::get('admin/cities/getCities/{id}','CitiesController@getCities');