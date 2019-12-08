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

use App\Restaurant;
use Illuminate\Support\Facades\View;

Route::view('/', 'pages.welcome')->name('index');
Route::get('/rank', function () {
    return View::make('pages.rank', ['restaurants' => Restaurant::all()]);
})->name('rank');
Route::view('/map', 'pages.map')->name('map');
Route::view('/team', 'pages.team')->name('team');

Route::view('/test', 'mails.signedup');

Route::prefix('newsletter')->group(function () {
    Route::post('signup', 'VisitorController@signup')->name('newsletter-signup');
    Route::get('confirm/{user}/{hash}', 'VisitorController@confirm')->name('newsletter-confirm');
    Route::get('remove/{user}/{hash}', 'VisitorController@remove')->name('newsletter-remove');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
