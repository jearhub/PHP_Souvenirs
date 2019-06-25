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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('home.index');
});

Route::get('/cartcheckout', [
    'uses' => 'ProductController@getCartcheckout',
    'as' => 'cartcheckout',
    'middleware' => 'auth'
]);
Route::get('/products', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/procat', [
    'uses' => 'ProductController@proCat',
    'as' => 'procat.proCat'
]);

Route::get('procat/{category}','ProductController@proCat');

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
Route::get('/removeOne/{id}', [
    'uses' => 'ProductController@getRemoveOne',
    'as' => 'product.removeOne'
]);
Route::get('/removeAll/{id}', [
    'uses' => 'ProductController@getRemoveAll',
    'as' => 'product.removeAll'
]);
Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);
Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::group(['prefix'=>'user'], function (){
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'users.signup',
        'middleware' => 'guest'
    ]);
    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as' => 'users.signup',
        'middleware' => 'guest'
    ]);
    Route::get('/signin', [
        'uses' => 'UserController@getSignin',
        'as' => 'users.signin',
        'middleware' => 'guest'
    ]);
    Route::post('/signin', [
        'uses' => 'UserController@postSignin',
        'as' => 'users.signin',
        'middleware' => 'guest'
    ]);
    Route::get('/profile', [
        'uses' => 'UserController@getProfile',
        'as' => 'users.profile',
        'middleware' => 'auth'
    ]);
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'users.logout',
        'middleware' => 'auth'
    ]);
});

Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('search/', 'ProductController@search');
Route::get('souvenirs/', 'SouvenirController@index');
Route::get('souvenirs/create', 'SouvenirController@Create');
Route::post('souvenirs/create', 'SouvenirController@CreateSouvenir');
Route::get('suppliers/', 'SupplierController@index');
Route::get('suppliers/create', 'SupplierController@Create');
Route::post('suppliers/create', 'SupplierController@CreateSupplier');
Route::get('categories/', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@Create');
Route::post('categories/create', 'CategoryController@CreateCategory');
Route::get('users/', 'UserController@index');
Route::get('orders/', 'UserController@getOrder');

