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

Route::view('/', 'registration')->name('registration');
Route::view('donation', 'donation')->name('donation');
Route::view('terms-condition', 'terms-condition')->name('terms');
Route::post('registration', 'Registration')->name('registration.store');
Route::post('donation', 'Donation')->name('donation.store');
Route::view('committee', 'committee')->name('committee');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/participant', 'ParticipantController');
    Route::resource('/donations', 'DonationController');
});
