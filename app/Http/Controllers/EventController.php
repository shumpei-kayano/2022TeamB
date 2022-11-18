<?php

namespace App\Http\Controllers;

use App\Event;
use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(Request $request)
    {
        // $items = DB::table('events')->simplePaginate(8);
        $items = Event::Paginate(8);
        // dd($items); //デバッグ用ddメソッド…変数の中身が見れる
        return view('event.eventichirankojin', ['items' => $items]);
    }

    public function add(Request $request)
    {
        $items = Area::all();
        return view('event.eventadd', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Event::$rules);
        $event = new Event;
        $form = $request->all();
        unset($form['_token']);
        $event->fill($form)->save();
        return redirect('/event013');
    }
}
