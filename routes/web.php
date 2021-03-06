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

Route::get('/', 'HomeController@index');
Route::get('/routes', 'RoutesController@index');
Route::get('/routes/{id}', 'RoutesController@view');
Route::get('/pronas', 'HomeController@about');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function(){
    Route::get('/','DashboardController@index');
    Route::resource('/cities', 'CitiesController');
    Route::resource('/price', 'PricesController');
});


// Route::get('/admin', 'Admin\DashboardController@index');