@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
<div class="p-mindfulness-end">
    <div class="p-mindfulness-end__left">
        <div class="p-mindfulness-end__middle">
            <p>お疲れ様でした！</p>
        </div>    
    </div>
    <div class="p-mindfulness-end__right">
        <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
        <form action="mypage_del">
        <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
        </form>
        <a href="#"><button class="p-mypage-setting__btn"> フォロワー登録・編集</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
    </div>    
</div>        
@endsection        