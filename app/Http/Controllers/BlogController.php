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

    //ブログ機能CDN読み込み
    public function wys()
    {
        return view('blog.wysiwyg');
    }


    public function savenew(Request $request)
    {
        $post = new Blog;                           //新規でblogsテーブル書き込み
        $this->validate($request, blog::$rules);    //ブログを登録する時に設定したルールにのっとっているかバリデートチェック
        /* $post->user_id = $request->user()->id;  */     //
        $post->title = $request->title;             //title(タイトル)をtitleカラムに
        $post->text = $request->text;               //text(本文)をtextカラムに
        $post->save();                              //$post -> save();でDBに保存が実行される

        // 画像の保存
        /*      if ($request->image) {

            if (
                $request->image->extension() == 'gif'
                || $request->image->extension() == 'jpeg'
                || $request->image->extension() == 'jpg'
                || $request->image->extension() == 'png'
            ) {
                $request->file('img')->storeAs('public/img', $post->id . '.' . $request->image->extension());  */    /*  name="image"から送られたファイルをstore(保存)する storeAsメソッドで任意の名前をつける */
        /*    }
        }
        return redirect('/#');  */                   //その後、(/表示先:未定に)リダイレクト
    }


    public function list(Request $request)
    {

        /* 新着順で並び替えて表示 →　並び順(orderBy)を投稿日(created_at)の 「降順(desc)」にして全て取得(get)する */
        /*  5件ずつ表示し、5件以上になるとページネーションが表示される(new_blog_list.blade.phpに記述) */
        $data = Blog::orderBy('created_at', 'desc')->paginate(5);           /* orderBy('title', 'asc') にすると、今度はタイトルで昇順で並べ替えて表示もできる */
        return view('blog.new_blog_list')->with(['data' => $data]);         /* DBから取得したデータを$dataに代入($dataの中に投稿データが入る) */
    }


    //投稿ページで(単独ページ)1ページずつ表示
    public function show($id)
    {
        $data = Blog::where('id', $id)->first();
        return view('blog.blog_show')->with(['data' => $data]);
    }
}
