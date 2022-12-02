@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
<div class="p-mindfulness-timer">
    <div class="p-mindfulness-timer__left">
            <div id="timer">5
                <a href="" id="start" class="inactive">スタート</a></div>
    </div>    
        <div class="p-mindfulness-timer__right">
            <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
            <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロワー登録・編集</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
      </div>
</div>   
@endsection
