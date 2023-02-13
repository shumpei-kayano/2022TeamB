<?php

namespace App\Http\Controllers;

use App\Event;
use App\Area;
use App\Models\Category;
use App\Models\User;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $items = Event::orderBy('updated_at', 'desc')
            ->where('publish_flag', '1')
            ->whereNotNull('user_id')
            ->Paginate(16);
        // $users = User::where('publish_flag','0');, 'users' => $users
        return view('event.eventichirankojin', ['items' => $items, 'categories' => $categories]);
    }
    // イベント新規作成画面へ
    public function add(Request $request)
    {
        $user = Auth::user();
        $items = Area::all();
        $categories = Category::all();
        return view('event.eventadd', ['items' => $items, 'categories' => $categories, 'user' => $user]);
    }
    // DBへイベント内容書き込み
    public function create(Request $request)
    {
        //バリデーション all()は入力値を全て連想配列で取得
        $validator = Validator::make($request->all(), Event::$rules);

        //バリデーションエラー
        if ($validator->fails()) {
            return redirect('/event015')
                ->withInput()
                ->withErrors($validator);
        }
        // 保存か公開か
        if ($request->has('save')) {
            Event::eventInsert0($request);
            return redirect('/event015');
        } elseif ($request->has('open')) {
            Event::eventInsert1($request);
            // insertしたeventをnew_eventに入れる
            $new_event = Event::orderBy('created_at', 'desc')->first();
            $guests = new Guest;  // guestsテーブルに書込む
            $guests->user_id = $request->user()->id;
            $guests->event_id = $new_event->id;
            $guests->save();
            return redirect('/event013');
        } else {
            return redirect('/event015');
        }
    }

    // イベント編集画面
    public function edit(Request $request)
    {
        $items = Area::all();
        $categories = Category::all();
        $event = Event::where('id', $request->id)->first(); //find($request->id)
        return view('event.eventedit', ['event' => $event, 'categories' => $categories, 'items' => $items]);
    }
    // 更新処理
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), Event::$rules);

        //バリデーション:エラー
        if ($validator->fails()) {
            // dd($validator);
            return back() //redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        Event::eventUpdate($request);
        return redirect('/event013');
    }
    // イベント詳細表示
    public function detailView(Request $request)
    {
        $user = Auth::user();
        $categories = Category::all();
        $item = Event::where('id', $request->id)->first();
        // dd($user->id);
        $guests = Guest::where('event_id', $request->id)
            ->where('user_id', $user->id)->first();
        if ($guests) {
            $join_flg = true;
        } else {
            $join_flg = false;
        }
        return view('event.eventdetailview', [
            'item' => $item,
            'categories' => $categories,
            'guests' => $guests,
            'user' => $user,
            'join_flg' => $join_flg
        ]);
    }
    // イベント参加、ゲストテーブルに書き込み
    public function attendEvent(Request $request, $id)
    {
        if ($request->has('join')) {
            Guest::guestInsert($request, $id);
        } elseif ($request->has('cancel')) {
            Guest::where('event_id', $request->id)
                ->where('user_id', $request->user()->id)
                ->delete();
            // dd($request->user()->id);
        } elseif ($request->has('edit')) {
            return redirect('/event016/' . $id); // $idの編集画面へ
        }
        return redirect('/event014/' . $id); // $idの詳細画面へ
    }

    // イベント削除
    public function destroy(Request $request)
    {
        Event::find($request->id)->delete();
        return redirect('/event013');
    }

    // イベントカテゴリ検索 id渡される
    public function categorySearch($id)
    {
        $categories = Category::all();
        $items = Event::orderBy('updated_at', 'desc')
            ->where('publish_flag', '1')
            ->where('category_id', $id)
            ->Paginate(16);
        return view('event.eventcategorysearch', [
            'items' => $items,
            'categories' => $categories,
            'id' => $id,
        ]);
    }
    // イベント開催地検索 idはルートパラメータで
    public function locationSearch($id)
    {
        $categories = Category::all();
        $city = Area::all()->where('id', $id);
        $items = Event::orderBy('updated_at', 'desc')
            ->where('publish_flag', '1')
            ->where('city', $id)
            ->Paginate(16);
        return view('event.eventlocationsearch', [
            'items' => $items,
            'categories' => $categories,
            'id' => $id,
            'city' => $city
        ]);
    }
    // user種別に表示させる userのpublish_flag→eventsのuser_cl
    public function publicIndex(Request $request)
    {
        $categories = Category::all();
        // flgに応じたユーザーを取り出す
        // $users = User::with('events')
        //     ->where('publish_flag', $request->public_flg)->get();
        // 4と5のユーザーが取り出せている
        // $users = collect([4, 5]);
        $user_cl = $request->session()->get('user_cl');
        if (isset($user_cl)) {    // 何もしない
        } else {                  // なければ入れる
            $request->session()->put('user_cl', $request->public_flg);
        }
        $items = Event::with('user')
            ->where('publish_flag', '1')     // 公開フラグ1だけ表示
            // ->where('user_id', $users)
            ->where('user_cl', $request->session()->get('user_cl')) // cl'1'だけ表示
            ->orderBy('updated_at', 'desc')  // 更新が新しい順
            ->paginate(16);
        return view(
            'event.eventichiranpublic',
            [
                'items' => $items,
                'categories' => $categories,
            ]
        );
    }
}
