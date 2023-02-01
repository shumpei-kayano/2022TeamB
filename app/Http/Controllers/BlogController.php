<?php

namespace App\Http\Controllers;                                         //フォルダ構成に沿って名前空間を指定している

use Illuminate\Http\Request;                                            //Illuminate\Httpパッケージ内に用意されている「Request」を使える状態に
use App\Blog;                                                           //Blogモデルを使う


class BlogController extends Controller                                 //Controllerというクラスを継承して作成している
{                                                                       //https://qiita.com/yukibe/items/b7186f05d1c266076a35
    public function __construct()                                       //ゲスト(ログインしていない人)の場合は、投稿記事の閲覧のみ可能とし、新規投稿などの機能は使わせない
    {                                                                   //middleware('auth')を呼び出し、アクセス制限をかける
        $this->middleware('auth')->except(['list', 'show']);            //except(['index']); などを記載すれば、アクセス制限の対象にindexアクションを除いてくれる
    }

    //トップページからもっと見る...Click hereで投稿されているブログ一覧を表示
    public function list(Request $request)
    {
        // 新着順で並び替えて表示 →　並び順(orderBy)を投稿日(created_at)の 「降順(desc)」にして全て取得(get)する
        //  5件ずつ表示し、5件以上になるとページネーションが表示される(new_blog_list.blade.phpに記述)
        $data = Blog::orderBy('created_at', 'desc')->paginate(5);           // orderBy('title', 'asc') にすると、今度はタイトルで昇順で並べ替えて表示もできる
        return view('blog.new_blog_list')->with(['data' => $data]);         // DBから取得したデータを$dataに代入($dataの中に投稿データが入る)
    }

    //ブログ機能CDN読み込み
    public function wys()
    {
        return view('blog.wysiwyg');
    }

    //複数のボタンを1つのFormで実装する
    public function buttons(Request $request)
    {
        //もし、buttonのname="create"がクリックされたら
        if ($request->has('create')) {
            // create押下時の処理
            return redirect('/create2');
            //もし、buttonのname="delete"がクリックされたら
        } elseif ($request->has('delete')) {
            // deleteボタン押下時の処理
            $id = $request->blog_id;                                                    //リクエストで送られてきたブログidを受け取り、$idに代入する
            $data = Blog::find($id);                                                    //findメソッドで、指定されたidに該当するレコードを取得し、$dataへ代入
            return view('blog.blog_check_deactivate', ['data' => $data, 'id' => $id]);  //確認画面'data.delete'ビューで、'data'をキーとしてデータが使用できるように、$dataを渡す
        }
    }

    //ブログ新規作成
    public function savenew(Request $request)
    {
        $post = new Blog;                               //新規でblogsテーブル書き込み
        $this->validate($request, blog::$rules);        //ブログを登録する時に設定したルールにのっとっているかバリデートチェック
        $post->user_id = $request->user()->name;        //投稿したユーザ名を表示
        $post->title = $request->title;                 //title(タイトル)をtitleカラムに
        $post->text = $request->text;                   //text(本文)をtextカラムに
        $post->save();                                  //$post -> save();でDBに保存が実行される
        return redirect('/my_posted_blog_list');        //その後、'/（投稿済みブログ一覧）'へリダイレクト
    }

    //ブログ投稿ページで(単独ページ)1ページずつ表示
    public function show($id)
    {
        $data = Blog::where('id', $id)->first();                            //Blogテーブルから1件だけ取得して表示させる
        return view('blog.blog_show')->with(['data' => $data]);
    }

    //投稿済みブログ一覧をリストで表示
    public function posted()
    {
        $data = Blog::orderBy('created_at', 'desc')->paginate(5);           // orderBy('title', 'asc') にすると、今度はタイトルで昇順で並べ替えて表示もできる
        return view('blog.my_posted_blog_list', ['data' => $data]);
    }

    //https://qiita.com/yukibe/items/da6b49ed05e04e21017f
    //投稿済みブログの編集用画面を表示
    public function edit(Request $request)
    {
        $data = Blog::find($request->id);
        return view('blog.my_blog_edit', ['data' => $data]);
    }

    //ブログ編集後、送信ボタンをクリックしその内容を送信した後にblogsテーブルに編集されたデータを格納する
    public function update(Request $request)
    {
        $id = $request->blog_id;                        //リクエストで送られてきたブログidを受け取り、$idに代入する
        $data = Blog::find($id);                        //findメソッドで、指定されたidに該当するレコードを取得し、$dataへ代入
        $data->title = $request->title;                 //$dataに代入されるレコードは編集前のもので、編集後の内容が代入されている$requestの内容に更新しなければならない
        $data->text = $request->text;                   //$requestから各プロパティを呼び出し、$dataの各プロパティとして代入する。（上書き保存のイメージ)
        $data->save();                                  //saveメソッドを実行し、内容をDBに書き込む
        return redirect('/my_posted_blog_list');        //その後、'/（投稿済みブログ一覧）'へリダイレクト
    }



    //ブログ記事を完全に削除する(ブログ記事の内容を確認後、
    //削除ボタンをクリックしその内容を送信した後にBlogテーブルに格納されたデータを削除する)
    public function remove(Request $request)
    {
        $id = $request->blog_id;                                                        //リクエストで送られてきたブログidを受け取り、$idに代入する
        $data = Blog::find($id);                                                        //findメソッドで、指定されたidに該当するレコードを取得し、$dataへ代入
        $data->delete();                                                                //deleteメソッドを実行し、内容をDBから削除する
        return view('blog.blog_completed_deactivate');                                  //削除が完了したら、削除しました画面を表示する
    }
}
