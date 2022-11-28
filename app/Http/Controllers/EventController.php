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
        $items = Area::all();
        $eitems = Event::first();
        return view('event.eventadd', ['items' => $items, 'eitems' => $eitems]);
    }

    public function create(Request $request)
    {
        // $this->validate($request, Event::$rules);
        // $event = new Event;
        // $form = $request->all();
        // unset($form['_token']);
        // $event->fill($form)->save();
        // return redirect('/event013');

        //バリデーション all()は入力値を全て連想配列で取得
        $validator = Validator::make($request->all(), Event::$rules);

        //バリデーションエラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        // if (!empty($file)) {
        //     $dir = 'eimg'; // imageディレクトリ名
        //     $file_name = $file->getClientOriginalName();
        //     $move = $file->storeAs('public/' . $dir, $file_name);
        // } else {
        //     $file_name = "noimage.png";
        // }

        Event::eventInsert($request);

        return redirect('/event013');
    }
    //更新画面ルーティングが'book/{book}'でid値を渡す時
    //そのid値に等しいBookインスタンスを渡してくれる
    public function edit(Request $request)
    {
        $event = Event::find($request->id);
        return view('event.eventedit', ['event' => $event]);
    }
}
