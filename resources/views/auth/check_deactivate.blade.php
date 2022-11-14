{{-- アカウント削除の確認画面 --}}

@extends('layouts.layout')   
@section('title')
    アカウント削除の確認画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <br>
        <div class="content_block">     {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">本当に削除しますか？</h4><br>
      
    
    <div align="center">
        <input class="p-header__login-button" type="submit" value="はい">
        <input class="p-header__login-button" type="submit" value="いいえ">
      </div>
    </div>
</div>
</div>
@endsection