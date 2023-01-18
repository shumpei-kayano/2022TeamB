<?php

namespace App\Http\Controllers;

use App\Event;
use App\Area;
use App\Models\Category;
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
        $items = Event::orderBy('updated_at', 'desc')->where('publish_flag', '1')->Paginate(8);
        // dd($categories); //デバッグ用ddメソッド…変数の中身が見れる
        return view('event.eventichirankojin', ['items' => $items, 'categories' => $categories]);
    }
    // イベント新規作成
    public function add(Request $request)
    {
        $user = Auth::user();
        $items = Area::all();
        $categories = Category::all();
        return view('event.eventadd', ['items' => $items, 'categories' => $categories, 'user' => $user]);
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
        $categories = Category::all();
        $item = Event::where('id', $request->id)->first();
        return view('event.eventdetailview', ['item' => $item, 'categories' => $categories]);
    }
    public function destroy(Request $request)
    {
        Event::find($request->id)->delete();
        return redirect('/event013');
    }

    // イベントカテゴリ検索
    public function categorySearch($id)
    {
        $categories = Category::all();
        $items = Event::orderBy('updated_at', 'desc')
            ->where('publish_flag', '1')
            ->where('category_id', $id)
            ->Paginate(8);
        return view('event.eventcategorysearch', ['items' => $items, 'categories' => $categories, 'id' => $id]);
    }
}
