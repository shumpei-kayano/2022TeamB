{{-- アカウント仮登録画面(メール認証) --}}
{{-- jQueryやJavaScriptを利用してタブメニューを実装すると --}}
{{-- Webサイトのパフォーマンスが悪くなり表示速度が遅くなるのでCSSで設定 --}}

@extends('layouts.uedake')   
@section('title')
    アカウント仮登録画面
@endsection

@section('main')

{{-- 個人タブ・店舗タブ・自治体タブの設定「ラジオボタン」と「コンテンツ内容」を一致させて開く方法 --}}
<div class="p-tab01">
  {{-- 個人タブ(タブ1)が必ず最初に表示されるように設定 --}}
  <input id="menu01" type="radio" name="tab_menu" checked><label class="p-tab01__tab_menu1" for="menu01">個人</label>
  <input id="menu02" type="radio" name="tab_menu"><label class="p-tab01__tab_menu2" for="menu02">店舗</label>
  <input id="menu03" type="radio" name="tab_menu"><label class="p-tab01__tab_menu3" for="menu03">自治体</label>
  
  {{-- 個人タブ下の入力エリア設定 --}}
  <div class="p-tab01__tab_contents1" id="menu01">
    <h4>アカウント仮登録</h4><br>
      <div class="mb-3">
        {{-- メールアドレス入力エリア --}}
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
      </div>
        {{-- 送信ボタン --}}
        <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="送信">
  </div>

  {{-- 店舗タブ下の入力エリア設定 --}}
  <div class="p-tab01__tab_contents2" id="menu02">
    <h4>アカウント仮登録</h4><br>
      <div class="mb-3">
        {{-- メールアドレス入力エリア --}}
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
      </div>
      {{-- 送信ボタン --}}
      <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="送信">
  </div>

  {{-- 自治体タブ下の入力エリア設定 --}}
  <div class="p-tab01__tab_contents3" id="menu03">
    <h4>アカウント仮登録</h4><br>
      <div class="mb-3">
        {{-- 認証コード入力エリア --}}
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="自治体認証コード">
      </div>
      <div class="mb-3">
        {{-- メールアドレス入力エリア --}}
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
      </div>
      {{-- 送信ボタン --}}
      <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="送信">
  </div>
  </div>


@endsection