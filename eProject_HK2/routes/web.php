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
Route::get('/index','GameShopController@index');
Route::get('/login','GameShopController@login');
Route::post('/checkLog','GameShopController@checkLog');
Route::prefix('admin')->name('admin')->middleware('CheckLogin')
    ->group(function(){
        //admin
        Route::get('home','GameShopController@adminHome');
        Route::get('displayUser','GameShopController@displayUser');
        Route::post('addUser','GameShopController@addUser');
        Route::get('resetPassword/{accountid}','GameShopController@resetPassword');
        //publisher
        Route::get('publisher/home','PublisherController@home');
        Route::get('publisher/create','PublisherController@create');
        Route::post('postCreatePulisher','PublisherController@postCreate');
        Route::get('publisher/delete/{id}','PublisherController@delete');
        Route::get('publisher/update/{id}','PublisherController@update');
        Route::post('publisher/postUpdate/{id}','PublisherController@postUpdate');
        //product
        Route::get('products/home','ProductController@home');
        Route::get('products/create','ProductController@create');
        Route::post('postCeate','ProductController@postCreate');
        Route::get('products/delete/{id}','ProductController@delete');
        Route::get('products/update/{id}','ProductController@update');
        Route::post('products/postUpdate/{id}','ProductController@postUpdate');
        //producer
        Route::get('producer/home','ProducerController@home');
        Route::get('producer/create','ProducerController@create');
        Route::post('postCreateProducer','ProducerController@postCreate');
        Route::get('producer/update/{id}','ProducerController@update');
        Route::post('producer/postUpdate/{id}','ProducerController@postUpdate');
        //caletory
        Route::get('category/home','CategoryController@home');
        Route::get('category/create','CategoryController@create');
        Route::post('postCeateCategory','CategoryController@postCreate');
        Route::get('category/update/{id}','CategoryController@update');
        Route::post('category/postUpdate/{id}','CategoryController@postUpdate');
        //OS
        Route::get('os/home','OsController@home');
        Route::get('os/create','OsController@create');
        Route::post('postCreateOS','OsController@postCreate');
        Route::get('os/update/{id}','OsController@update');
        Route::post('os/postUpdateOs/{id}','OsController@postUpdate');
    });
Route::prefix('user')->name('user')->middleware('CheckLogin')
    ->group(function(){
        Route::get('details/{accountid}','GameShopController@details');
    });