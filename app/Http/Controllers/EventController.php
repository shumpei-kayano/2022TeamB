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
            ->Paginate(8);
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
            return redirect('/event013');
        } else {
            // $message = 'ボタンは押されませんでした';
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
        $guests = Guest::where('event_id', $request->id)->first();
        // dd($request->id);
        return view('event.eventdetailview', [
            'item' => $item,
            'categories' => $categories,
            'guests' => $guests,
            'user' => $user
        ]);
    }
    // イベント参加、ゲストテーブルに書き込み
    public function attendEvent(Request $request, $id)
    {
        if ($request->has('join')) {
            Guest::guestInsert($request, $id);
        } elseif ($request->has('cancel')) {
            Guest::where('event_id', $request->id)
                ->where('user_id', $request->user_id)
                ->delete();
            dd($request->user_id);
        } elseif ($request->has('edit')) {
            return redirect('/event016/{id}');
        }
        return redirect('/event013');
        // $user = Auth::user();
        // $categories = Category::all();
        // $item = Event::where('id', $request->id)->first();
        // $guests = Guest::where('event_id', $request->id)->first();

        // return view('event.eventdetailview', [
        //     'item' => $item,
        //     'categories' => $categories,
        //     'guests' => $guests,
        //     'user' => $user
        // ]);
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
            ->Paginate(8);
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
            ->Paginate(8);
        return view('event.eventlocationsearch', [
            'items' => $items,
            'categories' => $categories,
            'id' => $id,
            'city' => $city
        ]);
    }
    // 自治体のイベントだけ表示させる userのpublish_flagが1だけ
    public function publicIndex()
    {
        $categories = Category::all();
        $publicusers = User::with('events')->where('publish_flag', '1')->get();
        // dd($publicusers);
        $items = Event::orderBy('updated_at', 'desc')  // 更新が新しい順
            ->where('publish_flag', '1')         // 公開フラグ1だけ表示
            ->where('user_id', $publicusers->first()->id)
            ->orWhere('user_id', $publicusers[1]->id)
            // ->orWhere('user_id', $publicusers[2]->id)
            ->Paginate(8);

        return view('event.eventichiranpublic', ['items' => $items, 'categories' => $categories,]);
    }
}
