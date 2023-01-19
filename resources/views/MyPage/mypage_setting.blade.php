@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-mypage-setting">
  <div class="p-mypage-setting__left">
    <div class="p-mypage-setting__top">
      <a href="#"><button class="p-user-mypage__btn"> 公開範囲の設定</button></a><br>
      <form action="check_deactivate">
        <a href="#"><button class="p-user-mypage__btn"> アカウント削除</button></a>
      </form>
    </div>
  </div>
  <div class="p-user-mypage__right">
    <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
    <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> プロフィール登録・編集</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
    <a href="create2"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
  </div>
  {{-- <style>xmsd</style> --}}
</div>
@endsection
