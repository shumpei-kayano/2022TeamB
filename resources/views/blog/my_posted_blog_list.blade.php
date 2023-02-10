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
                    <div class="p-blog_edit_area__blog_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div> 

                    <div class="p-blog_edit_area__blog_title_small">
                        {{-- 投稿日時をDBから取得し表示する/20文字だけ表示 --}}
                        <a href="/my_blog_edit/{{$datas->id}}" style="text-decoration: none; color:black;"> 【{{Str::limit($datas->created_at, 20, '' ) }}】</a>
                        {{-- ブログタイトルをDBから取得し表示する/日付も含めて50文字表示する/ 50文字以上の場合は(...)で表示する --}}
                        <a href="/my_blog_edit/{{$datas->id}}" style="text-decoration: none; color:black;"> {{Str::limit($datas->title, 50, '…' ) }}</a>
                    </div>

                </div>
                </div>
            </div>
            @endif
            @endforeach

            {{-- ページネーションの設定 --}}
            {{-- ログインユーザのidとDBから取り出したuser_idが一致した時の処理 --}}
            @if(Auth::user()->id == $datas->user_id)
            <div class="p-blog_edit_area__paginate_container">
            {{ $data->links() }}
            </div>
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

