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
    return view('welcome');
});

Route::get('/Addcart/{id}','User\CartController@addCart');
Route::get('/login','Admin\GameShopController@login');
Route::post('/checkLog','Admin\GameShopController@checkLog');

Route::prefix('admin')->name('admin')->middleware('CheckLogin')
    ->group(function(){
        //admin
        Route::get('home','Admin\GameShopController@adminHome');
        Route::get('displayUser','Admin\GameShopController@displayUser');
        Route::post('addUser','Admin\GameShopController@addUser');
        Route::get('resetPassword/{accountid}','Admin\GameShopController@resetPassword');
        //publisher
        Route::get('publisher/home','Admin\PublisherController@home');
        Route::get('publisher/create','Admin\PublisherController@create');
        Route::post('postCreatePulisher','Admin\PublisherController@postCreate');
        Route::get('publisher/delete/{id}','Admin\PublisherController@delete');
        Route::get('publisher/update/{id}','Admin\PublisherController@update');
        Route::post('publisher/postUpdate/{id}','Admin\PublisherController@postUpdate');
        //product
        Route::get('products/home','Admin\ProductController@home');
        Route::get('products/create','Admin\ProductController@create');
        Route::post('postCeate','Admin\ProductController@postCreate');
        Route::get('products/delete/{id}','Admin\ProductController@delete');
        Route::get('products/update/{id}','Admin\ProductController@update');
        Route::post('products/postUpdate/{id}','Admin\ProductController@postUpdate');
        //producer
        Route::get('producer/home','Admin\ProducerController@home');
        Route::get('producer/create','Admin\ProducerController@create');
        Route::post('postCreateProducer','Admin\ProducerController@postCreate');
        Route::get('producer/update/{id}','Admin\ProducerController@update');
        Route::post('producer/postUpdate/{id}','Admin\ProducerController@postUpdate');
        //caletory
        Route::get('category/home','Admin\CategoryController@home');
        Route::get('category/create','Admin\CategoryController@create');
        Route::post('postCeateCategory','Admin\CategoryController@postCreate');
        Route::get('category/update/{id}','Admin\CategoryController@update');
        Route::post('category/postUpdate/{id}','Admin\CategoryController@postUpdate');
        //OS
        Route::get('os/home','Admin\OsController@home');
        Route::get('os/create','Admin\OsController@create');
        Route::post('postCreateOS','Admin\OsController@postCreate');
        Route::get('os/update/{id}','Admin\OsController@update');
        Route::post('os/postUpdateOs/{id}','Admin\OsController@postUpdate');
    });
Route::prefix('user')->name('user')->middleware('CheckLogin')
    ->group(function(){
        // Route::get('details/{accountid}','GameShopController@details');
        Route::get('/index','User\HomeController@index');
        // Route::get('userList', 'User\UserController@userList');

    });

/* -------------------User ------------------------------------------------------*/
