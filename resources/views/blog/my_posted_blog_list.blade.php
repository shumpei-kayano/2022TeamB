{{-- 自分自身の投稿済みブログ一覧 --}}
@extends('layouts.layout')   
@section('title')
    投稿済みブログ一覧
@endsection

@section('main')
{{-- 左側 --}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-blog_edit_area__container">
            {{-- 投稿済みブログ一覧（大）タイトルエリア --}}
            <div class="p-blog_edit_area__blog_title">   
            <h2>【投稿済みブログ一覧】</h2>
            </div>
            <br>
            
            {{-- DBから記事データを @foreach で取り出す --}}
            @foreach($data as $datas) 
            
            {{-- ブログ記事リスト区切りエリア --}}
            {{-- ログインユーザのidとDBから取り出したuser_idが一致した時の処理 --}}
            @if(Auth::user()->id == $datas->user_id)
            <div class="p-blog_edit_area__blog_post">    
                <div class="col-12">
                <div class="d-flex">
                    {{-- ユーザアイコンの表示 --}}
                    <div class="p-blog_edit_area__blog_icon" >
                        <img src="{{ asset('storage/userimg/' . $datas->user->icon)  }}" class="p-blog_edit_area__my_posted_blog_list_icon" alt="写真がありません">
                    </div> 

                    <div class="p-blog_edit_area__blog_title_small">
                        {{-- 投稿日時をDBから取得し表示する/20文字だけ表示 --}}
                        <a href="/my_blog_edit/{{$datas->id}}" style="text-decoration: none; color:black;"> 【{{Str::limit($datas->created_at, 10, '' ) }}】</a><br>
                        {{-- ブログタイトルをDBから取得し表示する/日付も含めて50文字表示する/ 50文字以上の場合は(...)で表示する --}}
                        <a href="/my_blog_edit/{{$datas->id}}" style="text-decoration: none; color:black;"> {{Str::limit($datas->title, 70, '…' ) }}</a>
                    </div>

                </div>
                </div>
            </div>
            @endif
            @endforeach

            {{-- ページネーションの設定 --}}
            {{-- $dataが定義されていて、かつnullではない時にtrueを返す --}}
            @if(isset($datas))
            {{-- ログインユーザのidとDBから取り出したuser_idが一致した時 --}}
            @if(Auth::user()->id == $datas->user_id)
            <div class="p-blog_edit_area__paginate_container">
            {{ $data->links() }}
            </div>
            @endif
            @endif
        </div> 
    </div>

    <div class="d-flex">
    <div class="row">

        {{-- ブログページの右側ボタン(ブログを書く・削除する) --}}
        <div class="p-blog_edit_area__button">
            <form action="/blog_delete" method="post">
            @csrf
            {{-- ボタンを表示 --}}
            <button class="p-posted_blog_container__btn1" name="create" type="submit">ブログを書く</button>
            </form>
        </div>

</div>
</div>
</div>
</div>
@endsection

