{{-- オープンチャット”退室”確認画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット退室確認画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <br>
        <div class="content_block">     {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">本当に退室しますか？</h4><br>
        <div class="yes_or_no">
            <form action="completed_leaving">
            <input class="p-header__login-button yes_or_no__yes" type="submit" value="はい">  {{-- まだ未設定 --}}
            </form>
            <form action="open_chat_room">
            <input class="p-header__login-button yes_or_no__no" type="submit" value="いいえ">
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection