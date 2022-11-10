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


//ログイン画面
//トップページ



Route::get('/', function () {
    return view('top');
});

Route::get('welcome/top', function () {
    return view('welcome.top');
});
//アカウント登録
Route::get('/ryukiunko', function () {
    return View('UserMypage1');
});
//ユーザから見た自治体ページ
Route::get('/shinmaimaou', function () {
    return View('Userlookjititai');
});

Route::get('/ryukiuzaishinekasugomi', function () {
    return View('JititaiMypage1');
});

Route::get('/ryukinotikubi', function () {
    return View('Right_Button');
});

Route::get('Proof', 'ProofController@index');
Auth::routes();
//Route::post('register', 'ProofController@register');


Route::get('/home', 'HomeController@index')->name('home');


//ログイン画面
Route::get('/unko', function () {
    return view('a');
});
//イベント一覧（個人）画面
Route::get('event013', 'EventController@index');

Route::get('event014', function () {
    return view('event.eventadd');
});

//アカウント仮登録画面（タブ切り替え）
Route::get('account', function () {
    return view('account');
});

Route::get('user1', function () {
    return view('user_look');
});

Route::get('user2', function () {
    return view('user_look2');
});

Route::get('user3', function () {
    return view('user_look3');
});