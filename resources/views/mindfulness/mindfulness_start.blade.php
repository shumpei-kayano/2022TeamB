@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
<div class="p-mindfulness-start">
    <div class="p-mindfulness-start__left">
      <div class="p-mindfulness-start__top">
        <form action="check_deactivate">
          <a href="#"><button class="p-mindfulness-start__btn"> スタート</button></a>
        </form>
      </div>
    </div>
    <div class="p-mindfulness-start__right">
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