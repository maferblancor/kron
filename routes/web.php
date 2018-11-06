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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	#this at last
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');


});

Route::prefix('admin/password')->group(function(){
	Route::post('/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');


	Route::get('/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	
	Route::post('/reset','Auth\AdminResetPasswordController@reset');
	
	Route::get('reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});

