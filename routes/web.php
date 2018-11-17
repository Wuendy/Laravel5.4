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


Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');
Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('profesor','ProfesorController');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::get('register/profile', 'UserController@create')->name('profile.register');
Route::post('register/pro', 'UserController@store')->name('profile.store');
Route::get('profiledita/{id}/edit', 'UserController@edit')->name('profile.edit');
Route::post('profiledita/{id}/edit', 'UserController@update')->name('profile.update');



Route::get('profil', 'ProfesorController@profile');
Route::get('profiledit/{id}/edit', 'ProfesorController@proed');
Route::post('profiledit/{id}/edit', 'ProfesorController@update_avatar')->name('profil.edit');
});
