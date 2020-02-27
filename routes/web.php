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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('index', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'FrontendController');

Route::group(['prefix' => 'admin','middlaware'=>['auth']],
 function () {
    Route::get('/admin', function () {
        return view('backend.index');
    });
    route::resource('teh','TehController');
    route::resource('kategori','KategoriController');
    route::resource('stok','StokController');
    route::resource('transaksi','TransaksiController');
});

Route::group(['prefix' => '/'], function(){
    route::get('index','FrontendController@index');
    route::get('shop/{teh}','FrontendController@shop');
    route::get('keranjang/{teh}','FrontendController@shop');
    route::get('favorit/{teh}','FrontendController@shop');
    Route::post('cart-post', 'Ecommerce\CartController@addToCart')->name('front.cart');
    Route::get('/cart', 'Ecommerce\CartController@listCart')->name('front.list_cart');
    Route::post('/cart/update', 'Ecommerce\CartController@updateCart')->name('front.update_cart');
 });
// Route::get('cart', function() {
//     return view('frontend.cart');
// });
