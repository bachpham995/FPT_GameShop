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
        Route::get('resetPassword/{accountid}','GameShopController@resetPassword');
        //member
        Route::get('member/home','MemberController@home');
        Route::get('member/delete/{id}','MemberController@delete');
        Route::get('member/create','MemberController@create');
        Route::post('member/postCreateMember','MemberController@postCreate');
        Route::get('member/update/{id}','MemberController@update');
        Route::post('member/postUpdate/{id}','MemberController@postUpdate');
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
        Route::get('producer/delete/{id}','ProducerController@delete');
        //caletory
        Route::get('category/home','CategoryController@home');
        Route::get('category/create','CategoryController@create');
        Route::post('postCeateCategory','CategoryController@postCreate');
        Route::get('category/update/{id}','CategoryController@update');
        Route::post('category/postUpdate/{id}','CategoryController@postUpdate');
        Route::get('category/delete/{id}','CategoryController@delete');
        //OS
        Route::get('os/home','OsController@home');
        Route::get('os/create','OsController@create');
        Route::post('postCreateOS','OsController@postCreate');
        Route::get('os/update/{id}','OsController@update');
        Route::post('os/postUpdateOs/{id}','OsController@postUpdate');
        Route::get('os/delete/{id}','OsController@delete');

    });
Route::prefix('user')->name('user')->middleware('CheckLogin')
    ->group(function(){
        // Route::get('details/{accountid}','GameShopController@details');
        Route::get('register','UserController@register');
        Route::post('postRegister', 'UserController@postRegister');
        Route::get('myAccount','UserController@myAccount');
        Route::get('signin','UserController@signin');
        Route::post('checkSignin','UserController@checkSignin');
        Route::get('userList', 'UserController@userList');
    });

/* -------------------User ------------------------------------------------------*/
