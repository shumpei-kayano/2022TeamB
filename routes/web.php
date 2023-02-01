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
use App\Http\Controllers\UsersController;
use Doctrine\DBAL\Schema\Index;

// use Illuminate\Routing\Route;

Route::get('welcome/top', function () {
    return view('welcome.top');
});

//トップページ
// Route::get('/', function () {
//     return view('top');
// });

Route::get('/', 'HomeController@index');

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

//アカウント削除するときのパスワード再確認
Route::middleware('auth')->group(function () {
    Route::middleware('password.confirm')->group(function () {
        Route::get('check_deactivate', function () {
            return view('auth.check_deactivate');
        });
    });
});



//自治体
Route::get('/municipalitypage', function () {
    return View('municipalitypage1');
});





//イベント一覧（個人）画面
Route::get('event013', 'EventController@index');

Route::get('event015', 'EventController@add');
Route::post('event015', 'EventController@create');

//イベント一覧（自治体）
Route::get('event001', 'EventController@publicIndex');



// イベントに参加する
Route::post('event014/{id}', 'EventController@attendEvent');

//イベントを削除 ルートパラメータでidを渡す
Route::post('eventdel/{id}', 'EventController@destroy');

// イベント検索（開催地・カテゴリ）
Route::get('locationsearch/{id?}', 'EventController@locationSearch');
Route::get('categorysearch/{id?}', 'EventController@categorySearch');

// 更新処理
Route::post('event016/{id}', 'EventController@update');

// イベント編集画面
Route::get('event016/{id}', 'EventController@edit');

// Route::get('event014/{id}', 'EventController@detailView');
//イベント/インプットのフレームのようなもの
Route::get('event020', function () {
    return view('components.framelikeinput');
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
// Route::get('mypage_set', function () {
//     return view('MyPage.mypage_setting');
// });
// Route::get('/user_mypage', [App\Http\Controllers\UsersController::class, 'index'])->name('user_mypage');
//アカウント削除ボタン表示画面
Route::get('mypage_del', function () {
    return view('MyPage.mypage_delete_account');
});
//ユーザーマイページ画面
// Route::get('user_mypage', function () {
//     return view('MyPage.user_mypage');
// });
// アカウント情報編集処理
Route::post('/add', 'UsersController@add')->name('add');
// Route::get('user_mypage', function () {
//     return view('MyPage.user_mypage');});
Route::get('user_mypage', 'UsersController@display');
//店鋪マイページ画面
Route::get('tenpo_mypage', function () {
    return view('MyPage.tenpo_mypage');
});
//自治体マイページ画面
Route::get('municipality_mypage', function () {
    return view('MyPage.municipality_mypage');
});





//アカウント削除するときのパスワード再確認
Route::middleware('auth')->group(function () {
    // イベント詳細画面
    Route::get('event014/{id}', 'EventController@detailView');
    // Route::post('event014/{id}', 'EventController@attendEvent');
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

//マインドフルネス、スタートボタン表示画面
Route::get('mindfulness_start', function () {
    return view('mindfulness.mindfulness_start');
});

//マインドフルネス終了画面
Route::get('mindfulness_end', function () {
    return view('mindfulness.mindfulness_end');
});

//マインドフルネス詳細表示画面
Route::get('mindfulness_detail', function () {
    return view('mindfulness.mindfulness_detail');
});

//マインドフルネスタイマー表示画面
Route::get('mindfulness_timer', function () {
    return view('mindfulness.mindfulness_timer');
});















//オープンチャット関連
Route::get('open_chat_list', 'ChatroomController@index3');

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
Route::get('create_new_open', 'Chatroomcontroller@index_2');

//オープンチャット新規作成プレビュー画面
Route::get('open_chat_preview', function () {
    return view('open_chat.open_chat_preview');
});

//オープンチャットのプレビュー画面から「新規作成ボタン」クリックでトークルーム開始
Route::get('open_chat_room/{id}', 'Chatroomcontroller@show');

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

//既存のオープンチャットに参加する
Route::get('join_open_chat', function () {
    return view('open_chat.join_open_chat');
});






//オープンチャットルーム作成
Route::post('open_chat_preview', 'ChatroomController@preview_post');
Route::post('create_new_open', 'ChatroomController@create');
// Route::post('create_new_open', 'ChatroomController@create2');





//プライベートチャットのトークルーム
Route::get('private_chat_room', function () {
    return view('dm.private_chat_room');
});

//現在参加中のチャットトークルームが新着順で一覧表示
Route::get('joining_chat', function () {
    return view('joining_chat');
});




//ブログ関連

//ブログ記事の削除完了画面
Route::get('blog_completed_deactivate', function () {
    return view('blog.blog_completed_deactivate');
});

//トップページから「もっと見る」をクリックでブログ記事一覧表示
Route::get('new_blog_list', 'BlogController@index');

//ブログ記事詳細ページ表示
// Route::get('blog_show', function () {
//     return view('blog.blog_show');
// });

//投稿済みブログ一覧
Route::get('my_posted_blog_list', function () {
    return view('blog.my_posted_blog_list');
});

//ブログ編集画面
Route::get('my_blog_edit', function () {
    return view('blog.my_blog_edit');
});

// 投稿ページを表示
Route::get('/create', 'BlogController@postpage');

// 投稿をコントローラーに送信
Route::post('/newpostsend', 'BlogController@savenew');

// 投稿一覧を表示する
Route::get('/new_blog_list', 'BlogController@list');

// 投稿一覧を表示する
// ブログリッチテキストエディターページ
Route::get('/create2', 'BlogController@wys');

// ブログ新規投稿投稿をコントローラーに送信
Route::post('/newpostsend', 'BlogController@savenew');

//トップページからブログコーナーの「もっと見る」をクリックでブログ記事一覧表示
Route::get('/new_blog_list', 'BlogController@list');

// ブログ(単独ページ)記事を表示する
Route::get('/blog_show/{id}', 'BlogController@show');

//投稿済みブログ一覧
Route::get('/my_posted_blog_list', 'BlogController@posted');

//投稿済みブログの編集用画面を表示
Route::get('/my_blog_edit/{id}', 'BlogController@edit');

//ブログ編集後、送信ボタンをクリックで、blogsテーブルに編集(更新)されたデータを格納する
Route::post('/update', 'BlogController@update');

//ブログ編集ページの右側1つのFormで複数ボタンを実装する
Route::post('/blog_delete', 'BlogController@buttons');

//ブログ記事の削除確認画面　　
Route::get('/blog_completed_deactivate/{id}', 'BlogController@delete');

//ブログ記事の削除完了画面　　　
Route::post('/blog_completed_deactivate/{id}', 'BlogController@remove');







//ユーザアイコンをクリックした時のマイページへの誘導画面(小ウィンドウ)表示 
Route::get('user_icon_modal', function () {
    return view('components.user_icon_modal');
});

//（顧客）飲食店ネット予約
Route::get('select_reserve', function () {
    return view('customer_reserve.select_reserve');
});

//（顧客）飲食店予約代表者情報入力ページ
Route::get('customer_info', function () {
    return view('customer_reserve.customer_info');
});

//（顧客）飲食店予約情報確認画面
Route::get('check_reserve_info', function () {
    return view('customer_reserve.check_reserve_info');
});

//（顧客）予約完了画面
Route::get('completed_reserve', function () {
    return view('customer_reserve.completed_reserve');
});

//（店側）予約詳細確認画面
Route::get('booking_details', function () {
    return view('restaurant.booking_details');
});

//(顧客が評価)店舗評価ページ
Route::get('rate', function () {
    return view('MyPage.rate');
});


//自治体（自分に見える側）フォロー中のユーザ表示画面　　　　　
Route::get('gov_following_this_side', function () {
    return view('follow.gov_following_this_side');
});

//自治体（他のユーザに見える側）フォロー中のユーザ表示画面　　　
Route::get('gov_following_other_side', function () {
    return view('follow.gov_following_other_side');
});

//自治体（自分に見える側）フォロワーの一覧表示画面　　          
Route::get('gov_follower_this_side', function () {
    return view('follow.gov_follower_this_side');
});

//自治体（他のユーザに見える側）フォロワーの一覧表示画面　　     
Route::get('gov_follower_other_side', function () {
    return view('follow.gov_follower_other_side');
});








//個人利用者（自分に見える側）フォロー中のユーザ表示画面            
Route::get('personal_following_this_side', function () {
    return view('follow.personal_following_this_side');
});

//個人利用者（他のユーザに見える側）フォロー中のユーザ表示画面      
Route::get('personal_following_other_side', function () {
    return view('follow.personal_following_other_side');
});


//個人利用者（自分に見える側）フォロワーの一覧表示画面              
Route::get('personal_follower_this_side', function () {
    return view('follow.personal_follower_this_side');
});


//個人利用者（他のユーザに見える側）フォロワーの一覧表示画面            
Route::get('personal_follower_other_side', function () {
    return view('follow.personal_follower_other_side');
});







//飲食店（自分に見える側）フォロー中のユーザ表示画面                
Route::get('restaurant_following_this_side', function () {
    return view('follow.restaurant_following_this_side');
});

//飲食店（他のユーザに見える側）フォロー中のユーザ表示画面          
Route::get('restaurant_following_other_side', function () {
    return view('follow.restaurant_following_other_side');
});


//飲食店（自分に見える側）フォロワーの一覧表示画面                  
Route::get('restaurant_follower_this_side', function () {
    return view('follow.restaurant_follower_this_side');
});



//飲食店（他のユーザに見える側）フォロワーの一覧表示画面            
Route::get('restaurant_follower_other_side', function () {
    return view('follow.restaurant_follower_other_side');
});



//検索結果表示ページ
Route::get('search_results', function () {
    return view('search_results');
});






//公開範囲の設定
Route::get('open_range', function () {
    return view('MyPage.open_range');
});

//オープンチャットルーム作成
Route::post('open_chat_preview', 'ChatroomController@preview_post');
Route::post('create_new_open', 'ChatroomController@create');
// Route::post('create_new_open', 'ChatroomController@create2');


//通報画面
Route::get('report', 'ReportController@index');
Route::get('complete_report', 'ReportController@report');

// Route::post('message_send', 'Chatroomcontroller@send');
Route::get('open_chat_room/{id}', 'Chatroomcontroller@show');
Route::post('open_chat_room/{id}', 'Chatroomcontroller@send');
