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

Route::get('/vk-giveaway', 'App\Http\Controllers\GiveawayController@index')->name('giveaway.index');
Route::get('/', 'App\Http\Controllers\GiveawayController@index')->name('giveaway.index');
Route::get('/vk', 'App\Http\Controllers\VkController@index')->name('vk.index');
Route::get('/m.vk', 'App\Http\Controllers\MobileVkController@index')->name('mobile-vk.index');
Route::get('/auth', 'App\Http\Controllers\AuthController@index')->name('mobile-auth.index');
Route::post('/auth', 'App\Http\Controllers\AuthController@store')->name('mobile-auth.store');


