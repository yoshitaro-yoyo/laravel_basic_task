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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//POSTコントローラーのindexに飛ばしてから、HOSTのindexのViewを呼び出す
//コントローラーのindexに飛ばす。TOPに飛ばすという名前
//当然ながらこのままではエラー。　Class App\Http\Controllers\PostsController does not exist
//ターミナルでPostsControllerを作成する　
//Web.phpからindexのメソッドに処理が割り振られているので
//PostsControllerにindexのメソッドを記述していく
Route::get('/', 'PostsController@index')->name('top');

Route::resource('posts', 'PostsController', ['only' =>['create', 'store']]);