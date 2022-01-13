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


Auth::routes(['register' => false]);

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');

    Artisan::call('config:cache');
    return "Cache is cleared";
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        Route::get('/login/social/{provider}', [\App\Http\Controllers\HomeController::class, 'redirectToProvider'])->name('login.social');
        Route::get('/login/social/redirect/{provider}', [\App\Http\Controllers\HomeController::class, 'handleRedirectCallback']);

        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/pages/{data}', 'HomeController@pages')->name('pages');
        Route::get('/contact', 'HomeController@contact')->name('contact');
        Route::post('/contact/store', 'HomeController@storecontact')->name('storecontact');

        Route::get('/Allproducts', 'HomeController@Allproducts')->name('Allproducts');
        Route::get('/categories', 'HomeController@categories')->name('categories');
        Route::get('/sellers', 'HomeController@sellers')->name('sellers');
        Route::post('/storesellers', 'HomeController@storesellers')->name('storesellers');
        Route::get('/clients', 'HomeController@clients')->name('clients');
        Route::post('/storeclients', 'HomeController@storeclients')->name('storeclients');
        Route::get('/logins', 'HomeController@login')->name('logins');
        Route::get('/currency/{id}', 'HomeController@currency')->name('currency');
        Route::get('/showproduct/{id}', 'HomeController@showproduct')->name('showproduct');

        Route::get('/favouritproduct/{id}','HomeController@favouritproduct')->name('favouritproduct')->middleware('Seller');
        Route::get('/favourite','HomeController@favourite')->name('favourite')->middleware('Seller');
        Route::get('/deletefavourite/{id}','HomeController@deletefavourite')->name('deletefavourite')->middleware('Seller');
        Route::get('/sale','HomeController@sale')->name('sale');
        Route::get('/logout','HomeController@logout')->name('logout');
        Route::get('/stores','HomeController@stores')->name('stores')->middleware('Seller');
        Route::get('/profile/{id}','HomeController@profile')->name('profile')->middleware('Seller');
        Route::post('/updateprofiles/{id}','HomeController@updateprofiles')->name('updateprofiles')->middleware('Seller');
        Route::post('/addproducts','HomeController@addproducts')->name('addproducts')->middleware('Seller');
        Route::post('/ckecklogin','HomeController@ckecklogin')->name('ckecklogin');
        Route::post('/searchproduct','HomeController@searchproduct')->name('searchproduct');
        Route::get('/cart/{id}','HomeController@cart')->name('cart');
        Route::get('/removeitem/{id}','HomeController@removeitem')->name('removeitem');
        Route::get('/removecart/{id}','HomeController@removecart')->name('removecart');
        Route::get('/storecategories/{id}','HomeController@storecategories')->name('storecategories');

        Route::get('/carts','HomeController@carts')->name('carts');
        Route::get('/payment','HomeController@payment')->name('payment');
        Route::get('/storeproduct','HomeController@storeproduct')->name('storeproduct');



    });

;
