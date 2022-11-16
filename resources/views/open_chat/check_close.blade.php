{{-- オープンチャットトークルーム”閉鎖”確認画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット閉鎖確認画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <br>
        <div class="content_block">     {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">本当に閉鎖しますか？</h4><br>
        <div class="yes_or_no">
            <input class="p-header__login-button yes_or_no__yes" type="submit" value="はい">
            <form action="/">
            <input class="p-header__login-button yes_or_no__no" type="submit" value="いいえ">
            </form>
          </div>
    </div>
</div>
</div>
</div>
@endsection