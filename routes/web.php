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

Route::resource('/','PagesController');
Route::get('/products','PagesController@products');
Route::get('/media-center','PagesController@mediaCenter');
Route::get('/media-center-detail','PagesController@newsArticleDetails');
Route::get('/about-us','PagesController@about');
Route::get('/contact-us','PagesController@contact');
Route::get('/product-details/{id}','PagesController@productDetails')->name('pages.productDetails');
Route::get('/product/{id}','PagesController@productSearch')->name('pages.productSearch');

