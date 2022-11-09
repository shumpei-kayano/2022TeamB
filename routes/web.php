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

//トップページ
Route::get('/', function () {
    return view('top');
});

//ログイン画面
Route::get('welcome/top', function () {
    return view('welcome.top');
});

//アカウント登録

Route::get('Proof', 'ProofController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//イベント一覧（個人）画面
Route::get('/event013', 'EventController@index');

Route::get('event014', function () {
    return view('eventadd');
});
