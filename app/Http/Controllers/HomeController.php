<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Blog;

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
        $items = Category::all();
        //ブログコーナーにタイトルを新着順で3件抽出して表示
        $data = Blog::orderBy('created_at', 'desc')->paginate(3);
        return view('top', ['items' => $items, 'data' => $data]);
    }
    public function left()
    {
        //トップページ左側カテゴリバー
        $categories = Category::all();
        return view('components/left', ['categories' => $categories]);
    }
}
