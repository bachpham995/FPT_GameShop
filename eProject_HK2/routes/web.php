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
        Route::get('users','GameShopController@users');
        Route::get('displayUser','GameShopController@displayUser');
        Route::post('addUser','GameShopController@addUser');
        Route::get('resetPassword/{accountid}','GameShopController@resetPassword');
    });
Route::prefix('user')->name('user')->middleware('CheckLogin')
    ->group(function(){
        Route::get('details/{accountid}','GameShopController@details');
    });