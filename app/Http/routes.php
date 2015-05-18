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

Route::get('/', 'IndexController@index');

Route::controller('index', 'IndexController');

Route::post('country/store', 'CountryController@postStore');
Route::post('paymentoption/store', 'PaymentOptionController@postStore');
Route::post('store/store', 'StoreController@postStore');
Route::post('brand/store', 'BrandController@postStore');
Route::post('delivery/store', 'DeliveryController@postStore');



Route::resource('admin/countries', 'CountryController');
Route::resource('admin/paymentoptions', 'PaymentOptionController');
Route::resource('admin/stores', 'StoreController');
Route::resource('admin/brands', 'BrandController');
Route::resource('admin/deliveries', 'DeliveryController');


/*Route::get('/lang/{locale?}', [
  'as'=>'lang', 
  'uses'=>'IndexController@changeLang'
]);*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
