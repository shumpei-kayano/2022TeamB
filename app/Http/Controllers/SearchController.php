<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chatroom;
use App\Event;


//DB(users,events,chatroomsテーブル)からキーワードに一致するデータを取得する
//検索機能:https://qiita.com/kakudaisuke/items/39d4e2b75f0416c5e70a
class SearchController extends Controller
{
    public function search(Request $request)
    {

        //フォームから送られてきた値(keyword)を受け取る
        $keyword = $request->input('keyword');

        //もし、値(keyword)が空じゃなければ、各DBからキーワードを含んだデータを検索し、すべて取得
        if (!empty($keyword)) {

            //ユーザ名4件ずつ表示
            $usernames = User::where('name', 'like', "%{$keyword}%")->paginate(4);
            //イベントタイトル・イベント詳細を3件ずつ表示
            $events = Event::where('event_title', 'like', "%{$keyword}%")->paginate(3);
            //チャットルーム3件ずつ表示
            $chatrooms = Chatroom::where('title', 'like', "%{$keyword}%")->paginate(3);
            //取得した値を('usernames', 'events', 'chatrooms'を一緒に渡す)viewに渡して表示す
            return view('search.find', compact('usernames', 'events', 'chatrooms'));
        } else {
            //もし、値(keyword)が空なら、トップページを表示する
            return redirect('/');
        }
    }
}
