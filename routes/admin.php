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

Route::prefix('user/')->group(function () {

    Route::get('registration', 'UserController@showRegistration')->name('user.regi');
    Route::post('registration', 'UserController@create')->name('user.create');

    Route::get('login', 'UserController@showLogin')->name('user.signin');
    Route::post('login', 'UserController@processLogin')->name('user.login');
    Route::post('logout', 'UserController@cLogout')->name('user.logout');
});

//Dashboard Item Route Section
Route::prefix('dashboard/')->group(function (){
    //Food Menu Item Adding Route
    Route::get('add-menu','MenuItemController@index')->name('menu.show-add-item');
    Route::post('add-menu','MenuItemController@create')->name('menu.process-add-item');
});
