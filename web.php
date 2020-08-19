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

// Route::group(['prefix' => 'admin'], function() {
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create','Admin\NewsController@add');
});

// 課題１
// A:Routing

// 課題２
// A:サイトの機能を後々拡張などした時に汎用性が高くなる。
//   ルーティングをコーディングをする際にコードを簡略化できる

// 課題３
// Q:「http://XXXXXX.jp/XXX というアクセスが来たときに、
//   AAAControllerのbbbというAction に渡すRoutingの設定」
//   を書いてみてください。
// 
// A: Route::get('XXX','AAAController@bbb');

//【応用】 
// Q:
// 前章でAdmin/ProfileControllerを作成し、
// add Action, edit Actionを追加しました。
// web.phpを編集して、admin/profile/create にアクセスしたら 
// ProfileController の add Action に、
// admin/profile/edit にアクセスしたら ProfileController 
// の edit Action に割り当てるように設定してください。

// A:
// Route::group(['prefix' => 'admin'], function() {
    // Route::get('profile/create','Admin/ProfileControllerr@add');
    // Route::get('profile/edit','Admin/ProfileControllerr@edit');
// });



