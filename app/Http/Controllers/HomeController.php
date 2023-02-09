<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Blog;
use App\Event;
use App\Models\Chatroom;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //トップページ左側カテゴリバー
        $categories = Category::all();

        //ブログコーナーにタイトルを新着順で3件抽出して表示
        $data = Blog::orderBy('created_at', 'desc')->paginate(3);

        // トップページ左下event013
        $items = Event::with('user')
            ->where('publish_flag', '1') // 公開フラグ1だけ表示
            ->where('user_cl', '0')      // cl'0'個人
            // ->orWhere('user_cl', '2')    // cl'2'店舗
            ->orderBy('updated_at', 'desc')  // 更新が新しい順
            ->paginate(3);

        $chats = Chatroom::orderBy('created_at', 'desc')->paginate(6);

        // トップページ県・市町村からの募集event001
        $publicEvents = Event::with('user')
            ->where('publish_flag', '1') // 公開フラグ1だけ表示
            ->where('user_cl', '1')      // cl'1'自治体
            ->orderBy('updated_at', 'desc')  // 更新が新しい順
            ->paginate(3);

        $request->session()->forget('user_cl');
        return view('top', [
            'categories' => $categories,
            'data' => $data,
            'items' => $items,
            'chats' => $chats,
            'publicEvents' => $publicEvents
        ]);
    }
}
