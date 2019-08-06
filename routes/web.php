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

Route::get('/', function(){return view('home/index/index');});
Route::any('home/contact/index', 'home\ContactController@index');

Route::group(['prefix' => 'admin'], function(){
    Route::get('public/login', 'admin\PublicController@login') -> name('login');
    Route::any('public/check', 'admin\PublicController@check');
    Route::any('public/signup', 'admin\PublicController@signup');
    Route::get('public/logout', 'admin\PublicController@logout');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::any('index/index', 'admin\IndexController@index');
    Route::get('index/click', 'admin\IndexController@click');

    Route::get('point/index', 'admin\PointController@index');
    Route::get('point/redeem/{a}/{p}', 'admin\PointController@redeem');
    Route::get('point/shipping', 'admin\PointController@shipping');

    Route::any('user/index', 'admin\UserController@index');
    Route::post('user/edit', 'admin\UserController@edit');

    Route::any('donor/index', 'admin\DonorController@index');
    Route::any('donor/submitForm', 'admin\DonorController@submitForm');

});