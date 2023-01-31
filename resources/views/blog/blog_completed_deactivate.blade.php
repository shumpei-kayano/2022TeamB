{{-- ブログ記事の削除完了画面 --}}

@extends('layouts.layout')   
@section('title')
    ブログ記事の削除完了画面
@endsection

@section('main')
<div class="p-small_bg">
    {{-- ログイン画面などの背景色 --}}
    <div class="p-small_bg__card_bg">   
        <br>
        {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <div class="content_block">
            {{-- ブログの削除完了を表示 --}}
        <h4 class="p-register-card__title">削除しました</h4><br>
        <div align="center">
            <form action="/my_posted_blog_list">
                {{-- "戻る"ボタンで、ユーザが過去に投稿したブログ一覧のリストへ --}}
            <input class="p-header__login-button" type="submit" value="戻る">
            </form>
          </div>
    </div>
</div>
</div>
</div>
@endsection