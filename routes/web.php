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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/main');
});
Route::get('/categories/{id}',[
    'uses'=>'CategoriesController@categoryAction'
]);
Route::get('/goods/{id}',[
    'uses'=>'GoodsController@productAction'
]);
Route::get('/order/{id}',[
    'uses'=>'OrdersController@buyAction'
]);
Route::get('/order_final',[
    'uses'=>'OrdersController@finishAction'
]);
Route::get('/chat',function(){
  return view('layouts/chat');
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
