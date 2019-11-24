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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','dashboardController@index')->name('dashboard');
});
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'user','middleware'=>['auth','user']], function(){
    Route::get('dashboard','dashboardController@index')->name('dashboard');
});

//post writing crud
Route::post('/posts','postController@posts')->name('posts');
Route::post('/profile','profileController@profile')->name('profile');

