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
            <form action="/">
            <input class="p-header__login-button yes_or_no__yes" type="submit" value="はい">
            </form>
            <form action="/">
            <input class="p-header__login-button yes_or_no__no" type="submit" value="いいえ">
            </form>
          </div>
        </div> 
    </div>
    </div>

@endsection