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

Route::view('/', 'pages.welcome')->name('index');
Route::view('/rank', 'pages.welcome')->name('rank');
Route::view('/map', 'pages.map')->name('map');
Route::view('/team', 'pages.team')->name('team');

