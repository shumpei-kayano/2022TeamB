{{-- ブログ記事削除の確認画面 --}}

@extends('layouts.layout')   
@section('title')
    ブログ記事削除の確認画面
@endsection

@section('main')
<div class="p-small_bg">
    {{-- ログイン画面などの背景色 --}}
    <div class="p-small_bg__card_bg">   
        <br>
        <div class="content_block">    
        {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">本当に削除しますか？</h4><br>
            <div class="yes_or_no">
            {{-- 「はい」を選択した時の処理 --}}
            <form action="{{ url('blog_completed_deactivate/'.$data->id) }}" method="post">
                @csrf
                {{-- 投稿済みブログを編集し、更新するためのfindのためにblog_idを送る必要がある テキストP.261 --}}
                <input type="hidden" name="blog_id" value="{{$data->id}}">
                <input type="submit" class="p-header__login-button yes_or_no__yes" value="はい">
            </form>
            {{-- 「いいえ」を選択した時の処理 --}}
            <form action="/my_posted_blog_list">
                <input class="p-header__login-button yes_or_no__no" type="submit" value="いいえ">
            </form>

            </div>
        </div> 
    </div>
</div>

@endsection