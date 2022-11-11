{{-- アカウント仮登録画面(メール認証) --}}

@extends('layouts.layout')   
{{-- layouts.'(uedake.blade.php)をあとで読み込む --}}
@section('title')
    アカウント仮登録画面
@endsection

@section('main')
<div class="p-tab01">
  <input id="menu01" type="radio" name="tab_menu" checked><label class="p-tab01__tab_menu1" for="menu01">個人</label>
  <input id="menu02" type="radio" name="tab_menu"><label class="p-tab01__tab_menu2" for="menu02">店舗</label>
  <input id="menu03" type="radio" name="tab_menu"><label class="p-tab01__tab_menu3" for="menu03">自治体</label>
  <div class="p-tab01__tab_contents1" id="menu01">
    <h4>アカウント仮登録</h4><br>
    <div class="mb-3">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
    </div>
    <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="送信">
  </div>
  <div class="p-tab01__tab_contents2" id="menu02">
    <h4>アカウント仮登録</h4><br>
    <div class="mb-3">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
    </div>
    <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="送信">
  </div>
  <div class="p-tab01__tab_contents3" id="menu03">
    <h4>アカウント仮登録</h4><br>
    <div class="mb-3">
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="自治体認証コード">
    </div>
    <div class="mb-3">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
    </div>
    <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="送信">
  </div>
  </div>


@endsection