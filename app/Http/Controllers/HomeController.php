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
    public function index()
    {
        //トップページ左側カテゴリバー
        $categories = Category::all();
        //ブログコーナーにタイトルを新着順で3件抽出して表示
        $data = Blog::orderBy('created_at', 'desc')->paginate(3);
        // トップページ左下event013
        $items = Event::orderBy('updated_at', 'desc')
            ->where('publish_flag', '1')
            ->whereNotNull('user_id')
            ->paginate(3);
        // トップページ県・市町村からの募集event001

        $chats = Chatroom::orderBy('created_at', 'desc')->paginate(6);

        return view('top', [
            'categories' => $categories,
            'data' => $data,
            'items' => $items,
            'chats' => $chats,
        ]);
    }
    public function eventkojin()
    {
        //トップページ左下
        $categories = Category::all();
        return view('components/left', ['categories' => $categories]);
    }
}
