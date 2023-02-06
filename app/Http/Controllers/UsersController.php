<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;


class UsersController extends Controller
{
    public function withdrawal()
    {
        $user = Auth::user();
        // $user->delete();
        Auth::logout();
        return view('auth.account_deleted');
    }
    public function add(Request $request)
    {
        // user情報をAuthで取得する
        $user = Auth::user();
        // useridが一致するものをテーブルから取り出す
        $users = User::whereid($user->id)->first();
        // 入力した情報を$formにいれる
        $form = $request->all();
        // dd($form,$request);
        // カラムごとにデータをテーブルに入れる。
        $users["hobby1"] = $form["hobby1"];
        $users["hobby2"] = $form["hobby2"];
        $users["hobby3"] = $form["hobby3"];
        $users["name"] = $form["user_name"];
        $users["email"] = $form["mail"];
        $users["self_introduction"] = $form["self_introduction"];
        // dd($form,$users);
        // トークンイラン券外す
        unset($form['_token']);

        $users->fill($form)->save();
        // dd($form);
        // redirectでトップのルートを見る
        // return redirect('/');
        $id = Auth::id();
        $human = DB::table('users')->find($id);
        return view('MyPage.user_mypage', ['human' => $human]);
    }
    public function display()
    {
        // $human = Users::all();
        $client = new Google_Client();

        //アプリケーション名
        $client->setApplicationName('GoogleCalendarAPIのテスト');
        //権限の指定
        $client->setScopes(Google_Service_Calendar::CALENDAR_EVENTS);
        //JSONファイルの指定
        $client->setAuthConfig(storage_path('app/api-key/calender-api-test-376003-53e5486ef712.json'));

        $id = Auth::id();
        $human = DB::table('users')->find($id);
        $categories = Category::all();
        return view('MyPage.user_mypage', ['human' => $human, 'client' => $client, 'categories' => $categories]);
    }

    public function useredit()
    {
        $id = Auth::id();
        $human = DB::table('users')->find($id);
        $categories = Category::all();
        return view('./Mypage/user_edit', ['human' => $human], compact('categories'));
    }

    public function tenpoedit()
    {
        $id = Auth::id();
        $human = DB::table('users')->find($id);
        $categories = Category::all();
        return view('./Mypage/tenpo_edit',['human' =>$human],compact('categories'));
    }

    public function municipalityedit()
    {
        $id = Auth::id();
        $human = DB::table('users')->find($id);
        $categories = Category::all();
        return view('./Mypage/municipality_edit',['human' =>$human],compact('categories'));
    }

}
