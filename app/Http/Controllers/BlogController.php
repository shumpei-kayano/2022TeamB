<?php

namespace App\Http\Controllers;             /* フォルダ構成に沿って名前空間を指定している */

use Illuminate\Http\Request;                        /* Illuminate\Httpパッケージ内に用意されている「Request」を使える状態に */
use App\Blog;                                       /* Blogモデルを使う */

class BlogController extends Controller             /* Controllerというクラスを継承して作成している */
{
    public function index()
    {
        return view('blog.new_blog_list');         /* トップページの「もっと見る」から新着ブログ一覧にとぶ */
    }

    public function postpage(Request $request)
    {
        return view('blog.my_blog_edit');
    }

    public function savenew(Request $request)
    {
        $post = new Blog;                           //新規でblogsテーブル書き込み
        $this->validate($request, blog::$rules);    //ブログを登録する時に設定したルールにのっとっているかバリデートチェック
        $post->title = $request->title;             //title(タイトル)をtitleからむに
        $post->text = $request->text;               //text(本文)をtextカラムに
        $post->save();                              //$post -> save();でDBに保存が実行される

        return redirect('/#');                      //その後、/post1にリダイレクト
    }

    public function list(Request $request)
    {
        $data = Blog::all();                                         /* Blog::all(); というのが、データベースへの問い合わせ文(クエリ) */
        return view('blog.new_blog_list')->with(['data' => $data]);      /* DBから取得したデータを$dataに代入($dataの中に投稿データが入る) */
    }
}
