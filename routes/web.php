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
//     return view('frontEnd.index');
// });

//LandingPageController
Route::get('/', 'LandingPageController@index')->name('frontEnd.landing-page');


//Shop Controller
Route::get('/shop', 'ShopController@index')->name('frontEnd.shop');
Route::get('/shop/{product}', 'ShopController@show')->name('frontEnd.shop.show');
Route::get('/search', 'ShopController@search')->name('frontEnd.search');


//Cart Controller
Route::get('/cart', 'CartController@index')->name('frontEnd.cart.index');
Route::post('/cart', 'CartController@store')->name('frontEnd.cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('frontEnd.cart.destroy');
Route::get('/cart/checkout', 'CartController@checkout')->name('frontEnd.cart.checkout');
Route::get('/cart/customize', 'CartController@customizeMerchantPage')->name('frontEnd.cart.custom');

Route::get('/search', 'ShopController@search')->name('frontEnd.search');



Route::get('/empty' , function(){
	Cart::destroy();
});

//Checkout Controller
Route::get('/checkout', 'CheckoutController@index')->name('frontEnd.checkout.index');
// Route::get('/cart', function () {
//     return view('frontEnd.cart');
// });


//payment
//reqource('payment', 'PaymentController');

// Route::get('/shop', function () {
//     return view('frontEnd.shop');
// });

Route::get('/blog', function () {
    return view('frontEnd.blog');
});

Route::get('/contact', function () {
    return view('frontEnd.contact');
});

Route::get('/regular', function () {
    return view('frontEnd.regular-page');
});

Route::get('/single', function () {
    return view('frontEnd.single-blog');
});

Route::get('/singleprod', function () {
    return view('frontEnd.single-product-details');
});
