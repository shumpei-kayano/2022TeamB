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

use App\Chatroom;
use App\Http\Controllers\Chatroomcontroller;
// use Illuminate\Routing\Route;

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
Route::get('welcome/top', function () {
    return view('welcome.top');
});
//アカウント登録
Route::get('/UserMypage', function () {
    return View('MyPage.UserMypage1');
});
//ユーザから見た自治体ページ
Route::get('/userlookmunicipality', function () {
    return View('MyPage.UserlookMunicipality');
});

Route::get('/municipalityMyPage', function () {
    return View('MyPage.MunicipalityMypage1');
});

Route::get('/ryukinotikubi', function () {
    return View('Right_Button');
});

Route::get('Proof', 'ProofController@index');
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
// Route::get('check_deactivate', function () {
//     return view('auth.check_deactivate');
// });

//アカウント削除完了画面
// Route::get('/account_deleted', function () {
//     return view('auth.account_deleted');
// });
//アカウント削除試す
// Route::post('/user', 'UsersController@withdrawal')->name('user.withdrawal');
Route::post('/account_deleted', 'UsersController@withdrawal')->name('user.withdrawal');
//ログアウト完了画面に飛ぶ
Route::get('/completed_logout', function () {
    return view('auth.completed_logout');
});




Route::get('/municipalitypage', function () {
    return View('municipalitypage1');
});

//イベント一覧（個人）画面
Route::get('event013', 'EventController@index');

Route::get('event015', 'EventController@add');
Route::post('event015', 'EventController@create');





Route::get('event014', function () {
    return view('event.eventadd2');
});


//利用者から見たユーザーマイページ画面
Route::get('user1', function () {
    return view('MyPage.user_look');
});
//利用者から見た店鋪マイページ
Route::get('user2', function () {
    return view('MyPage.user_look2');
});
//利用者から見た自治体マイページ
Route::get('user3', function () {
    return view('MyPage.user_look3');
});
//イベント詳細画面
Route::get('events_detail', function () {
    return view('MyPage.events_d');
});

//マイページ設定画面
Route::get('mypage_set', function () {
    return view('MyPage.mypage_setting');
});
//アカウント削除ボタン表示画面
Route::get('mypage_del', function () {
    return view('MyPage.mypage_delete_account');
});
//ユーザーマイページ画面
Route::get('user_mypage', function () {
    return view('MyPage.user_mypage');
});
//店鋪マイページ画面
Route::get('tenpo_mypage', function () {
    return view('MyPage.tenpo_mypage');
});
//自治体マイページ画面
Route::get('municipality_mypage', function () {
    return view('MyPage.municipality_mypage');
});




Route::middleware('auth')->group(function () {



    Route::middleware('password.confirm')->group(function () {


        Route::get('check_deactivate', function () {
            return view('auth.check_deactivate');
        });
    });
});



//公開範囲の設定
Route::get('open_range', function () {
    return view('MyPage.open_range');
});
















//オープンチャット関連
Route::get('open_chat_list', function () {
    return view('open_chat.open_chat_list');
});

//オープンチャット退室確認画面
Route::get('check_leaving', function () {
    return view('open_chat.check_leaving');
});

//オープンチャット退室確認画面
Route::get('check_close', function () {
    return view('open_chat.check_close');
});

//アカウント削除前のパスワード確認画面
Route::middleware('auth')->group(function () {



    Route::middleware('password.confirm')->group(function () {

        //アカウント削除確認画面
        Route::get('check_deactivate', function () {
            return view('auth.check_deactivate');
        });
    });
});
//オープンチャット一覧ページで「新規作成ボタン」をクリックしたらと
//オープンチャット新規作成画面で「CLOSEボタン」をクリックすると
//オープンチャット利用規約ページを表示
Route::get('terms_of_service', function () {
    return view('open_chat.terms_of_service');
});

//オープンチャット利用規約の「確認しました」ボタンをクリック後、
//新規作成画面を表示する
Route::get('create_new_open', function () {
    return view('open_chat.create_new_open');
});

//オープンチャット新規作成プレビュー画面
Route::get('open_chat_preview', function () {
    return view('open_chat.open_chat_preview');
});

//オープンチャット新規作成プレビュー画面表示




//オープンチャットのプレビュー画面から「新規作成ボタン」クリックでトークルーム開始
Route::get('open_chat_room', function () {
    return view('open_chat.open_chat_room');
});

//オープンチャットを「閉鎖する」ボタンで”閉鎖”確認画面へ
Route::get('check_close', function () {
    return view('open_chat.check_close');
});

//オープンチャットを「退室する」ボタンで”閉鎖”確認画面へ
Route::get('check_leaving', function () {
    return view('open_chat.check_leaving');
});

//オープンチャットを閉鎖する「はい」ボタンで”閉鎖完了”画面へ
Route::get('completed_close', function () {
    return view('open_chat.completed_close');
});

//オープンチャットを退室する「はい」ボタンで”閉鎖完了”画面へ
Route::get('completed_leaving', function () {
    return view('open_chat.completed_leaving');
});


//ブログ関連
//ブログ記事の削除確認画面
Route::get('blog_check_deactivate', function () {
    return view('blog.blog_check_deactivate');
});

//ブログ記事の削除完了画面
Route::get('blog_completed_deactivate', function () {
    return view('blog.blog_completed_deactivate');
});

//ブログ記事一覧表示
Route::get('new_blog_list', function () {
    return view('blog.new_blog_list');
});

//ブログ記事詳細ページ表示
Route::get('blog_show', function () {
    return view('blog.blog_show');
});

//投稿済みブログ一覧
Route::get('my_posted_blog_list', function () {
    return view('blog.my_posted_blog_list');
});

//ブログ編集画面
Route::get('my_blog_edit', function () {
    return view('blog.my_blog_edit');
});

//公開範囲の設定
Route::get('open_range', function () {
    return view('MyPage.open_range');
});

//オープンチャットルーム作成
Route::post('open_chat_preview', 'ChatroomController@preview_post');
Route::post('create_new_open', 'ChatroomController@create');
// Route::post('create_new_open', 'ChatroomController@create2');
