@extends('layouts.layout')

@section('title')
    アカウント仮登録画面
@endsection

@section('main')
<div class="p-tab01">
  <input id="menu01" type="radio" name="tab_menu" checked><label class="p-tab01__tab_menu1" for="menu01">個人</label>
  <input id="menu02" type="radio" name="tab_menu"><label class="p-tab01__tab_menu2" for="menu02">店舗</label>
  <input id="menu03" type="radio" name="tab_menu"><label class="p-tab01__tab_menu3" for="menu03">自治体</label>
  <div class="p-tab01__tab_contents1" id="menu01">
    <p>アカウント仮登録</p>
    <input class="p-tab01__tab_contents1_mail" type="search" name="search" placeholder="メールアドレス"><br>
    <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="送信">
  </div>
  <div class="p-tab01__tab_contents2" id="menu02">
    <p>アカウント仮登録</p>
    <input class="p-tab01__tab_contents2_mail" type="search" name="search" placeholder="メールアドレス"><br>
    <input class="p-tab01__tab_contents2_send" type="submit" name="submit" value="送信">
  </div>
  <div class="p-tab01__tab_contents3" id="menu03">
    <p>アカウント仮登録</p>
    <input class="p-tab01__tab_contents3_code" type="search" name="search" placeholder="自治体認証コード"><br>
    <input class="p-tab01__tab_contents3_mail" type="search" name="search" placeholder="メールアドレス"><br>
    <input class="p-tab01__tab_contents3_send" type="submit" name="submit" value="送信">
  </div>
  </div>


@endsection