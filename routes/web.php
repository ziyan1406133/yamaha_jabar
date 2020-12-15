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

Route::resource('pengguna', 'Backsite\UserController');
Route::resource('partner-region', 'Backsite\RegionController');
Route::resource('partner-network', 'Backsite\NetworkController');
Route::resource('product', 'Backsite\ProductController');
Route::resource('message', 'Backsite\MessageController');
Route::resource('career', 'Backsite\CareerController');

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

Route::get('/profile/company', 'Frontsite\ProfileController@company')->name('profile.company');
Route::get('/profile/history', 'Frontsite\ProfileController@history')->name('profile.history');
Route::get('/profile/vision-mission', 'Frontsite\ProfileController@visionMission')->name('profile.vision-mission');
Route::get('/profile/awards', 'Frontsite\ProfileController@awards')->name('profile.awards');
Route::get('/profile/partner', 'Frontsite\ProfileController@partner')->name('profile.partner');