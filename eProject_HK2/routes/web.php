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

/*==============================Main=====================================*/
Route::get('/index','GameShopController@index');
Route::get('/login','GameShopController@login');
Route::get('/products','GameShopController@products');
Route::get('/productsByPbl/{id}','GameShopController@productsByPublisher');
Route::get('/productsByCtg/{id}','GameShopController@productsByCategory');
Route::get('/productsByPrdc/{id}','GameShopController@productsByProducer');
Route::get('/productsByOs/{id}','GameShopController@productsByOs');
Route::get('/filterProduct','GameShopController@filterProduct');
Route::get('/productDetail/{id}','GameShopController@viewProductdetail');
Route::get('/About','GameShopController@viewAbout');
Route::get('/contact','GameShopController@contact');
Route::post('/postMessage','GameShopController@postMessage');
Route::get('/support','GameShopController@support');
Route::get('/register','GameShopController@register');
Route::get('/myAccount','GameShopController@myAccount');
Route::get('/myAccountUpdate','GameShopController@myAccountUpdate');
Route::post('/postAccountUpdate','GameShopController@postAccountUpdate');
Route::get('/changePassword','GameShopController@changePassword');
Route::post('/postChangePassword','GameShopController@postChangePassword');
Route::get('/orderHistory','GameShopController@orderHistory');
Route::get('/orderDetail/{id}','GameShopController@orderDetail');


/*==========================Security=========================================*/
Route::post('/checkLog', 'SecurityController@checkLog');
Route::post('/postRegister', 'SecurityController@postRegister');
Route::get('/logout', 'SecurityController@logout');
Route::get('/forget', 'SecurityController@forgetPassword');
Route::post('/getForgotPassword', 'SecurityController@getForgotPassword');
Route::get('/resetPassword/{token}', 'SecurityController@resetPassword');
Route::post('/newPass', 'SecurityController@newPass');
/*=========================================================================*/

/*=============================Cart======================================*/
Route::get('/AddCart/{id}', 'User\CartController@addCart');
Route::get('/DecreaseCart/{id}', 'User\CartController@decreaseQuantity');
Route::get('/DeleteItemCart/{id}', 'User\CartController@deleteItemCart');
Route::get('/ListCart', 'User\CartController@viewListCart');
Route::get('/Goback', 'User\CheckoutController@goBack');
Route::get('/Delete-Item-List-Cart/{id}', 'User\CartController@deleteItemListCart');
Route::get('/Update-Quantity', 'User\CartController@updateQuantity');
Route::get('/Comment/{id}', 'Admin\CommentController@comment');
Route::get('/ToCommentPage/{id}', 'Admin\CommentController@goToPage');
Route::get('Checkout', 'User\CheckoutController@goCheckout')->middleware('CheckUser');
Route::get('GotoBill/{id}', 'User\CheckoutController@goBill')->middleware('CheckUser');
Route::get('','User\CheckoutController@checkLogin');
/*=========================================================================*/
//------------USER-----------------------------------------------------------------------------
// Route::prefix('client')->name('checkout')->
// ->group(function () {
       
    // });
/*=========================================================================*/
//------------ADMIN-----------------------------------------------------------------------------
Route::prefix('admin')->name('admin')->middleware('CheckAdmin')
    ->group(function () {
        //admin
        Route::get('resetPassword/{accountid}', 'Admin\GameShopController@resetPassword');
        //member
        Route::get('member/home', 'Admin\MemberController@home');
        Route::get('member/delete/{id}', 'Admin\MemberController@delete');
        Route::get('member/create', 'Admin\MemberController@create');
        Route::post('member/postCreateMember', 'Admin\MemberController@postCreate');
        Route::get('member/update/{id}', 'Admin\MemberController@update');
        Route::post('member/postUpdate/{id}', 'Admin\MemberController@postUpdate');
        //publisher
        Route::get('publisher/home', 'Admin\PublisherController@home');
        Route::get('publisher/create', 'Admin\PublisherController@create');
        Route::post('postCreatePublisher', 'Admin\PublisherController@postCreate');
        Route::get('publisher/delete/{id}', 'Admin\PublisherController@delete');
        Route::get('publisher/update/{id}', 'Admin\PublisherController@update');
        Route::post('publisher/postUpdate/{id}', 'Admin\PublisherController@postUpdate');
        //product
        Route::get('products/home', 'Admin\ProductController@home');
        Route::get('products/create', 'Admin\ProductController@create');
        Route::post('postCreateProduct', 'Admin\ProductController@postCreate');
        Route::get('products/delete/{id}', 'Admin\ProductController@delete');
        Route::get('products/update/{id}', 'Admin\ProductController@update');
        Route::get('products/view/{id}', 'Admin\ProductController@view');
        Route::post('products/postUpdate/{id}', 'Admin\ProductController@postUpdate');
        //Comments
        Route::get('products/comment/{id}', 'Admin\ProductController@comment');
        Route::get('products/deleteComment/{id}', 'Admin\ProductController@deleteComment');
        //Images
        Route::get('products/image/{id}', 'Admin\ProductController@image');
        Route::get('products/createImage/{id}', 'Admin\ProductController@createImage');
        Route::post('products/postCreateImage/{id}', 'Admin\ProductController@postCreateImage');
        Route::get('products/deleteImage/{id}', 'Admin\ProductController@deleteImage');
        Route::get('products/updateImage/{id}', 'Admin\ProductController@updateImage');
        Route::post('products/postUpdateImage/{id}', 'Admin\ProductController@postUpdateImage');

        //producer
        Route::get('producer/home', 'Admin\ProducerController@home');
        Route::get('producer/create', 'Admin\ProducerController@create');
        Route::post('postCreateProducer', 'Admin\ProducerController@postCreate');
        Route::get('producer/update/{id}', 'Admin\ProducerController@update');
        Route::post('producer/postUpdate/{id}', 'Admin\ProducerController@postUpdate');
        Route::get('producer/delete/{id}', 'Admin\ProducerController@delete');
        //category
        Route::get('category/home', 'Admin\CategoryController@home');
        Route::get('category/create', 'Admin\CategoryController@create');
        Route::post('postCeateCategory', 'Admin\CategoryController@postCreate');
        Route::get('category/update/{id}', 'Admin\CategoryController@update');
        Route::post('category/postUpdate/{id}', 'Admin\CategoryController@postUpdate');
        Route::get('category/delete/{id}', 'Admin\CategoryController@delete');
        //OS
        Route::get('os/home', 'Admin\OsController@home');
        Route::get('os/create', 'Admin\OsController@create');
        Route::post('postCreateOS', 'Admin\OsController@postCreate');
        Route::get('os/update/{id}', 'Admin\OsController@update');
        Route::post('os/postUpdateOs/{id}', 'Admin\OsController@postUpdate');
        Route::get('os/delete/{id}', 'Admin\OsController@delete');
        // Order
        Route::get('order/home', 'Admin\OrderController@home');
        Route::get('order/detail/{id}', 'Admin\OrderController@viewDetail');
        //Feedback
        Route::get('feedback/home', 'Admin\FeedbackController@home');
    });
//------------SUPERVISOR-------------------------------------------------------------------------
Route::prefix('supervisor')->name('supervisor')->middleware('CheckSupervisor')
    ->group(function () {
        //member
        Route::get('member/home', 'Supervisor\MemberController@home');
        Route::get('member/delete/{id}', 'Supervisor\MemberController@delete');
        Route::get('member/create', 'Supervisor\MemberController@create');
        Route::post('member/postCreateMember', 'Supervisor\MemberController@postCreate');
        Route::get('member/update/{id}', 'Supervisor\MemberController@update');
        Route::post('member/postUpdate/{id}', 'Supervisor\MemberController@postUpdate');
    });
