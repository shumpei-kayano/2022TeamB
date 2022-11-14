@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-user-mypage-setting__right">
    <img src="{{ asset('/img/noimage.png') }}" width="200px" height="200px">
    <a href="#"><button class="p-user-mypage__btn"> 設定</button></a>
    <a href="#"><button class="p-user-mypage__btn"> プロフィール登録・編集</button></a>
    <a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
    <a href="#"><button class="p-user-mypage__btn"> フォロー中</button></a>
    <a href="#"><button class="p-user-mypage__btn--red"> イベント投稿</button></a>
    <a href="#"><button class="p-user-mypage__btn--red"> ブログ投稿</button></a>
    <a href="#"><button class="p-user-mypage__btn--red"> チャット</button></a>
    <a href="#"><button class="p-user-mypage__btn--red"> DM</button></a>
@endsection