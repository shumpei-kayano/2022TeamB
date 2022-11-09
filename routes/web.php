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
Route::get('/', function () {
    return view('top');
});

Route::get('welcome/top', function () {
    return view('welcome.top');
});
//アカウント登録
Route::get('/ryukiunko' , function () {
    return View('UserMypage1');
});
//ユーザから見た自治体ページ
Route::get('/shinmaimaou' , function () {
    return View('Userlookjititai');
});

Route::get('/ryukiuzaishinekasugomi' , function () {
    return View('JititaiMypage1');
});

Route::get('/ryukinotikubi' , function () {
    return View('Right_Button');
});