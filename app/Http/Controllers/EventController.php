<?php

namespace App\Http\Controllers;

use App\Event;
use App\Area;
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
        // $items = DB::table('events')->simplePaginate(8);
        $items = Event::orderBy('updated_at', 'desc')->where('publish_flag', '1')->Paginate(8);
        // dd($items); //デバッグ用ddメソッド…変数の中身が見れる
        return view('event.eventichirankojin', ['items' => $items]);
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        $items = Area::all();
        return view('event.eventadd', ['items' => $items, 'user' => $user]);
    }

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

        if ($request->has('save')) {
            Event::eventInsert0($request);
            return redirect('/event015');
        } elseif ($request->has('open')) {
            Event::eventInsert1($request);
            return redirect('/event013');
        } else {
            // $message = 'ボタンは押されませんでした';
            // dd($message);
            return redirect('/event015');
        }
    }
    //更新画面ルーティングが'book/{book}'でid値を渡す時
    //そのid値に等しいBookインスタンスを渡してくれる
    public function edit(Request $request)
    {
        $items = Area::all();
        $event = Event::where('id', $request->id)->first(); //find($request->id)
        return view('event.eventedit', ['event' => $event, 'items' => $items]);
    }
    // 更新
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
        $item = Event::where('id', $request->id)->first();
        return view('event.eventdetailview', ['item' => $item]);
    }
}
