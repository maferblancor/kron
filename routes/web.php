<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!a
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/user', 'UserController@index')->name('home');
Route::get('/user/shop', function (){

	$this->middleware('auth');
	return view('user/shop');

})->name('user.shop');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	#this at last
	Route::get('/', 'AdminController@index')->name('admin.index');
	
});

Route::prefix('admin/password')->group(function(){
	Route::post('/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');


	Route::get('/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	
	Route::post('/reset','Auth\AdminResetPasswordController@reset');
	
	Route::get('reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});


Route::resource('admin/posts','AdminPostController');
Route::get('/posts','PostController@index')->name('user.posts.index');
Route::get('/posts/{post}','PostController@show')->name('user.posts.show');



Route::resource('admin/users','AdminUserController');


Route::resource('admin/items','AdminItemController');
Route::get('/items','ItemController@index')->name('user.items.index');
Route::get('/items/{item}','ItemController@show')->name('user.items.show');



Route::resource('admin/news','AdminNewsController');
Route::get('/news','NewsController@index')->name('user.news.index');
Route::get('/news/{new}','NewsController@show')->name('user.news.show');

