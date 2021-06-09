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

// Site routes

Route::get('/', 'App\Http\Controllers\SiteController@showHome');


// Authentication routes
Auth::routes();
// Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Subscription routes
Route::get('subscribe', 'App\Http\Controllers\SubscribeController@showSubscribe');
Route::post('subscribe', 'App\Http\Controllers\SubscribeController@processSubscribe');

// Single Post routes
Route::get('{slug}', 'App\Http\Controllers\SiteController@showPost');

// Account routes