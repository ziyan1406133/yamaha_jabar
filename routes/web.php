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

Route::get('/', 'HomeController@index')->name('homepage');

Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');

// Route::resource('pengguna', 'Backsite\UserController');
Route::get('pengguna', 'Backsite\UserController@index')->name("pengguna.index");
Route::get('pengguna/create', 'Backsite\UserController@create')->name("pengguna.create");
Route::get('pengguna/{id}/edit', 'Backsite\UserController@edit')->name("pengguna.edit");
Route::get('pengguna/{id}', 'Backsite\UserController@show')->name("pengguna.show");
Route::post('pengguna', 'Backsite\UserController@store')->name("pengguna.store");
Route::put('pengguna/{id}', 'Backsite\UserController@update')->name("pengguna.update");
Route::delete('pengguna/{id}', 'Backsite\UserController@destroy')->name("pengguna.destroy");

// Route::resource('partner-region', 'Backsite\RegionController');
Route::get('partner-region', 'Backsite\RegionController@index')->name("partner-region.index");
Route::get('partner-region/create', 'Backsite\RegionController@create')->name("partner-region.create");
Route::get('partner-region/{id}/edit', 'Backsite\RegionController@edit')->name("partner-region.edit");
Route::get('partner-region/{id}', 'Backsite\RegionController@show')->name("partner-region.show");
Route::post('partner-region', 'Backsite\RegionController@store')->name("partner-region.store");
Route::put('partner-region/{id}', 'Backsite\RegionController@update')->name("partner-region.update");
Route::delete('partner-region/{id}', 'Backsite\RegionController@destroy')->name("partner-region.destroy");

// Route::resource('partner-network', 'Backsite\NetworkController');
Route::get('partner-network', 'Backsite\NetworkController@index')->name("partner-network.index");
Route::get('partner-network/create', 'Backsite\NetworkController@create')->name("partner-network.create");
Route::get('partner-network/{id}/edit', 'Backsite\NetworkController@edit')->name("partner-network.edit");
Route::get('partner-network/{id}', 'Backsite\NetworkController@show')->name("partner-network.show");
Route::post('partner-network', 'Backsite\NetworkController@store')->name("partner-network.store");
Route::put('partner-network/{id}', 'Backsite\NetworkController@update')->name("partner-network.update");
Route::delete('partner-network/{id}', 'Backsite\NetworkController@destroy')->name("partner-network.destroy");

// Route::resource('product', 'Backsite\ProductController');
Route::get('product', 'Backsite\ProductController@index')->name("product.index");
Route::get('product/create', 'Backsite\ProductController@create')->name("product.create");
Route::get('product/{id}/edit', 'Backsite\ProductController@edit')->name("product.edit");
Route::get('product/{id}', 'Backsite\ProductController@show')->name("product.show");
Route::post('product', 'Backsite\ProductController@store')->name("product.store");
Route::put('product/{id}', 'Backsite\ProductController@update')->name("product.update");
Route::delete('product/{id}', 'Backsite\ProductController@destroy')->name("product.destroy");

// Route::resource('message', 'Backsite\MessageController');
Route::get('message', 'Backsite\MessageController@index')->name("message.index");
Route::get('message/create', 'Backsite\MessageController@create')->name("message.create");
Route::get('message/{id}/edit', 'Backsite\MessageController@edit')->name("message.edit");
Route::get('message/{id}', 'Backsite\MessageController@show')->name("message.show");
Route::post('message', 'Backsite\MessageController@store')->name("message.store");
Route::put('message/{id}', 'Backsite\MessageController@update')->name("message.update");
Route::delete('message/{id}', 'Backsite\MessageController@destroy')->name("message.destroy");


// Route::resource('career', 'Backsite\CareerController');
Route::get('career', 'Backsite\CareerController@index')->name("career.index");
Route::get('career/create', 'Backsite\CareerController@create')->name("career.create");
Route::get('career/{id}/edit', 'Backsite\CareerController@edit')->name("career.edit");
Route::get('career/{id}', 'Backsite\CareerController@show')->name("career.show");
Route::post('career', 'Backsite\CareerController@store')->name("career.store");
Route::put('career/{id}', 'Backsite\CareerController@update')->name("career.update");
Route::delete('career/{id}', 'Backsite\CareerController@destroy')->name("career.destroy");

// Route::resource('testimony', 'Backsite\TestimonyController');
Route::get('testimony', 'Backsite\TestimonyController@index')->name("testimony.index");
Route::get('testimony/create', 'Backsite\TestimonyController@create')->name("testimony.create");
Route::get('testimony/{id}/edit', 'Backsite\TestimonyController@edit')->name("testimony.edit");
Route::get('testimony/{id}', 'Backsite\TestimonyController@show')->name("testimony.show");
Route::post('testimony', 'Backsite\TestimonyController@store')->name("testimony.store");
Route::put('testimony/{id}', 'Backsite\TestimonyController@update')->name("testimony.update");
Route::delete('testimony/{id}', 'Backsite\TestimonyController@destroy')->name("testimony.destroy");


Route::post('feature', 'Backsite\FeatureController@store')->name('feature.store');
Route::delete('feature/{id}', 'Backsite\FeatureController@destroy')->name('feature.destroy');
Route::post('color', 'Backsite\ColorController@store')->name('color.store');
Route::delete('color/{id}', 'Backsite\ColorController@destroy')->name('color.destroy');
Route::post('/career/change_status', 'Backsite\CareerController@change_status')->name('career.change_status');



Route::get('/produk', 'Frontsite\ProductController@index')->name('produk.index');
Route::get('/produk/{id}', 'Frontsite\ProductController@show')->name('produk.show');
Route::get('/produk-tech', 'Frontsite\ProductController@tech')->name('produk.tech');

Route::get('/network', 'Frontsite\NetworkController@index')->name('network.index');
Route::get('/network/{id}', 'Frontsite\NetworkController@show')->name('network.show');

Route::get('/careers', 'Frontsite\CareerController@index')->name('careers.index');
Route::get('/testimoni', 'Frontsite\TestimonyController@index')->name('testimoni.index');

Route::get('/profile/company', 'Frontsite\ProfileController@company')->name('profile.company');
Route::get('/profile/history', 'Frontsite\ProfileController@history')->name('profile.history');
Route::get('/profile/vision-mission', 'Frontsite\ProfileController@visionMission')->name('profile.vision-mission');
Route::get('/profile/awards', 'Frontsite\ProfileController@awards')->name('profile.awards');
Route::get('/profile/partner', 'Frontsite\ProfileController@partner')->name('profile.partner');