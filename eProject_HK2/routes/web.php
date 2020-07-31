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
//Cart
Route::get('/AddCart/{id}','User\CartController@addCart');
Route::get('/DecreaseCart/{id}','User\CartController@decreaseQuantity');

Route::get('/DeleteItemCart/{id}','User\CartController@deleteItemCart');
Route::get('/ListCart','User\CartController@viewListCart');
Route::get('/Payment','User\CheckoutController@checkLoginWithCheckout');
Route::get('/Goback','User\CheckoutController@goBack');
Route::get('/Checkout','User\CheckoutController@checkoutWithBill');
Route::get('/About','Admin\GameShopController@viewAbout');
Route::get('/Delete-Item-List-Cart/{id}','User\CartController@deleteItemListCart');
Route::get('/Update-Quantity','User\CartController@updateQuantity');
//Cart
Route::get('/demoIndex','User\HomeController@index');
Route::get('/index','Admin\GameShopController@index');
Route::get('/login','Admin\GameShopController@login');
Route::get('/products','Admin\GameShopController@products');
Route::post('/checkLog','Admin\GameShopController@checkLog');
Route::get('/contact','Admin\GameShopController@contact');
Route::get('/support','Admin\GameShopController@support');
Route::get('/register','Admin\GameShopController@register');
//------------ADMIN-----------------------------------------------------------------------------
Route::prefix('admin')->name('admin')->middleware('CheckAdmin')
    ->group(function(){
        //admin
        Route::get('resetPassword/{accountid}','Admin\GameShopController@resetPassword');
        //member
        Route::get('member/home','Admin\MemberController@home');
        Route::get('member/delete/{id}','Admin\MemberController@delete');
        Route::get('member/create','Admin\MemberController@create');
        Route::post('member/postCreateMember','Admin\MemberController@postCreate');
        Route::get('member/update/{id}','Admin\MemberController@update');
        Route::post('member/postUpdate/{id}','Admin\MemberController@postUpdate');
        //publisher
        Route::get('publisher/home','Admin\PublisherController@home');
        Route::get('publisher/create','Admin\PublisherController@create');
        Route::post('postCreatePublisher','Admin\PublisherController@postCreate');
        Route::get('publisher/delete/{id}','Admin\PublisherController@delete');
        Route::get('publisher/update/{id}','Admin\PublisherController@update');
        Route::post('publisher/postUpdate/{id}','Admin\PublisherController@postUpdate');
        //product
        Route::get('products/home','Admin\ProductController@home');
        Route::get('products/create','Admin\ProductController@create');
        Route::post('postCreateProduct','Admin\ProductController@postCreate');
        Route::get('products/delete/{id}','Admin\ProductController@delete');
        Route::get('products/update/{id}','Admin\ProductController@update');
        Route::get('products/view/{id}','Admin\ProductController@view');
        Route::post('products/postUpdate/{id}','Admin\ProductController@postUpdate');
        //Comments
        Route::get('products/comment/{id}','Admin\ProductController@comment');
        Route::get('products/deleteComment/{id}','Admin\ProductController@deleteComment');

        //producer
        Route::get('producer/home','Admin\ProducerController@home');
        Route::get('producer/create','Admin\ProducerController@create');
        Route::post('postCreateProducer','Admin\ProducerController@postCreate');
        Route::get('producer/update/{id}','Admin\ProducerController@update');
        Route::post('producer/postUpdate/{id}','Admin\ProducerController@postUpdate');
        Route::get('producer/delete/{id}','Admin\ProducerController@delete');
        //category
        Route::get('category/home','Admin\CategoryController@home');
        Route::get('category/create','Admin\CategoryController@create');
        Route::post('postCeateCategory','Admin\CategoryController@postCreate');
        Route::get('category/update/{id}','Admin\CategoryController@update');
        Route::post('category/postUpdate/{id}','Admin\CategoryController@postUpdate');
        Route::get('category/delete/{id}','Admin\CategoryController@delete');
        //OS
        Route::get('os/home','Admin\OsController@home');
        Route::get('os/create','Admin\OsController@create');
        Route::post('postCreateOS','Admin\OsController@postCreate');
        Route::get('os/update/{id}','Admin\OsController@update');
        Route::post('os/postUpdateOs/{id}','Admin\OsController@postUpdate');
        Route::get('os/delete/{id}','Admin\OsController@delete');



    });
//------------SUPERVISOR-------------------------------------------------------------------------
Route::prefix('supervisor')->name('supervisor')->middleware('CheckSupervisor')
    ->group(function(){
        //admin
        Route::get('resetPassword/{accountid}','Admin\GameShopController@resetPassword');
        //member
        Route::get('member/home','Supervisor\MemberController@home');
        Route::get('member/delete/{id}','Supervisor\MemberController@delete');
        Route::get('member/create','Supervisor\MemberController@create');
        Route::post('member/postCreateMember','Supervisor\MemberController@postCreate');
        Route::get('member/update/{id}','Supervisor\MemberController@update');
        Route::post('member/postUpdate/{id}','Supervisor\MemberController@postUpdate');
    });

//------------------USER---------------------------------------------------------------------------
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
