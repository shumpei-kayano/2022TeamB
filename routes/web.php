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

//Laravelのホーム表示
Route::get('welcome/top', function () {
    return view('welcome.top');
});

//トップページ
Route::get('/', function () {
    return view('top');
});

//ログイン画面にとぶ
Route::get('/login', function () {
    return view('auth.login');
});

//Authログインに使うよ
Auth::routes();

//アカウント仮登録画面（タブ切り替え）
Route::get('mail_verification', function () {
    return view('auth.mail_verification');
});

//アカウント登録完了画面
Route::get('completed_registration', function () {
    return view('auth.completed_registration');
});

//ログイン成功後のページ表示
Route::get('/home', 'HomeController@index')->name('home');


//アカウント削除画面
Route::get('account_deactivate', function () {
    return view('auth.account_deactivate');
});

//アカウント削除の確認画面
Route::get('check_deactivate', function () {
    return view('auth.check_deactivate');
});

//アカウント削除完了画面
Route::get('account_deleted', function () {
    return view('auth.account_deleted');
});


//ログアウト完了画面に飛ぶ
Route::get('/logout_kanryou', function () {
    return view('auth.logout_kanryou');
});

//プロフィール登録
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



//イベント一覧（個人）画面
Route::get('/event013', function () {
    return view('eventichirankojin');
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

Route::get('events_detail', function () {
    return view('events_d');
});

//オープンチャット関連
Route::get('open_chat_list', function () {
    return view('open_chat.open_chat_list');
});
