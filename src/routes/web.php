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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', function () {
    return redirect('homepage');
});

// Homepage
//Route::view('/homepage', 'pages/homepage');
Route::get('/homepage', 'HomepageController@index')->name('homepage');
Route::get('/catalog', 'CatalogController@index')->name('catalog');

// Catalog
Route::get('/catalog/{cat}', 'CatalogController@proCat');
Route::get('transfer');
Route::get('find', 'CatalogController@find');
Route::get('search', 'CatalogController@search');
//Route::post('product', 'CatalogController@viewProduct');
Route::get('item/{id}', 'CatalogController@openProduct')->name('openProduct'); //open prod in new tab

//Review
//Route::view('/review', 'pages/add_review')->name('review');
Route::get('rateProduct/{id}', 'CatalogController@getProduct')->name('rateProduct')->middleware('auth');
Route::post('addReview/{productID}/{clientID}','ReviewController@addReview')->name('rateProduct.addReview');

// Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Basket
Route::get('add-to-basket/{id}', 'BasketController@add')->name('basket.add')->middleware('auth');
Route::get('clear-cart', 'BasketController@clearBasket')->name('basket.clearBasket')->middleware('auth');
Route::get('increase/{id}', 'BasketController@increaseQty')->name('basket.increaseQty')->middleware('auth');
Route::get('decrease/{id}', 'BasketController@decreaseQty')->name('basket.decreaseQty')->middleware('auth');

//checkout
Route::view('/checkout', 'pages/checkout')->middleware('auth');
Route::get('/checkout', 'CheckoutController@index')->middleware('auth');

Route::get('payment', 'BasketController@order');
Route::view('payment', 'pages/transfer-payment');

// Static pages
Route::view('aboutus','pages/aboutus');
Route::view('contacts','pages/contacts');
Route::view('faq','pages/faq');

// Manage Profile
//Route::view('/myprofile', 'pages/myprofile')->middleware('auth');
Route::get('myprofile', 'ProfileController@index')->middleware('auth')->name('myprofile');
Route::get('myprofile','ProfileController@userView')->middleware('auth');
Route::post('myprofile/submitUserInfo','ProfileController@submitUserInfo')->middleware('auth');
Route::view('/myprofile/preferences', 'pages/preferences')->middleware('auth');
Route::get('/myprofile/account_data','ProfileController@userView')->middleware('auth');
Route::view('/myprofile/account_data', 'pages/account_data')->middleware('auth');
Route::post('myprofile/submitAccountData','ProfileController@submitAccountData')->middleware('auth');
Route::view('/myprofile/myprofile_payment_method', 'pages/myprofile_payment_method')->middleware('auth');
Route::view('/myprofile/myprofile_inventory', 'pages/myprofile_inventory')->middleware('auth');
Route::view('/myprofile/myorders', 'pages/myorders')->middleware('auth');
Route::view('/myprofile/track-order', 'pages/track-order')->middleware('auth');
Route::view('/myprofile/wishlist', 'pages/wishlist')->middleware('auth');

//Route::post('/myprofile/wishlist/{product}', 'WishlistController@store')->middleware('auth');
Route::view('/myprofile/myprofile_new_return', 'pages/myprofile_new_return')->middleware('auth');

Route::get('/createOrder', 'BasketController@createOrder')->name('createOrder');


// Admin pages
//Admin manage users
Route::view('admin_manage_users','pages/admin_manage_users')->middleware('auth')->name('admin_manage_users');
Route::get('/admin_manage_users','ManageUsersController@getUsers')->middleware('auth');
Route::get('/admin_manage_users/delete/{id}', 'ManageUsersController@deleteUser')->name('users.delete')->middleware('auth');
Route::post('/admin_manage_users/addUser','ManageUsersController@addUser')->middleware('auth');
Route::post('/admin_manage_users/addAdministrator','ManageUsersController@addAdministrator')->middleware('auth');
Route::post('/searchUser', 'ManageUsersController@searchUser')->middleware('auth')->name('searchUser');

// Admin magage products
Route::view('admin_manage_products', 'pages/admin_manage_products')->middleware('auth');
Route::get('/admin_manage_products','AdministrationController@index')->middleware('auth');
Route::post('/admin_manage_products/addAlbum','AdministrationController@addAlbum')->middleware('auth');
Route::post('/admin_manage_products/addInstrument','AdministrationController@addInstrument')->middleware('auth');
Route::get('/admin_manage_products/delete/{id}', 'AdministrationController@deleteProduct')->name('products.delete')->middleware('auth');
Route::post('/admin_manage_products/updateAlbum', 'AdministrationController@updateAlbum')->name('products.updateAlbum')->middleware('auth');
Route::post('/admin_manage_products/updateOther', 'AdministrationController@updateOther')->name('products.updateOther')->middleware('auth');

// Admin manage payments
Route::view('admin_manage_payments','pages/admin_manage_payments')->middleware('auth');
Route::get('/admin_manage_payments','AdministrationController@payment')->middleware('auth');
Route::get('/admin_manage_payments/delete/{id}', 'AdministrationController@deletePayment')->name('payments.delete')->middleware('auth');
Route::get('/admin_manage_payments/accept/{id}', 'AdministrationController@acceptPayment')->name('payments.accept')->middleware('auth');

// Admin manage ratings
Route::view('admin_manage_ratings','pages/admin_manage_ratings')->middleware('auth');
Route::get('/admin_manage_ratings','AdministrationController@review')->middleware('auth');
Route::get('/admin_manage_ratings/delete/{id}', 'AdministrationController@deleteReview')->name('reviews.delete')->middleware('auth');

Route::post('sortUsers','ManageUsersController@sortUsers')->middleware('auth');

