<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {
    Route::get('/rs-admin', [
        'uses'  => 'AdminLoginController@showLoginForm',
        'as'    =>  '/rs-admin'
    ]);

    Route::post('/rs-admin','AdminLoginController@processLogin')->name('login');
    Route::get('/dashboard','AdminLoginController@dashboard')->name('dashboard');
    Route::get('/logout','AdminLoginController@logout')->name('logout');

});

//User Login and Registration Route Section

Route::prefix('user')->group(function () {

    Route::get('/login', [
        'uses'  => 'UserController@showLogin',
        'as'    => '/login'
    ])->name('user.login');

    Route::get('/registration', [
        'uses'  => 'UserController@showRegistration',
        'as'    => '/registration'
    ])->name('user.registration');
});
