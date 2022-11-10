@extends('layouts.layout')

@section('title')
    アカウント仮登録画面
@endsection

@section('main')
<div class="tab01">
  <input id="menu01" type="radio" name="tab_menu" checked><label class="tab_menu" for="menu01">メニュー項目 1</label>
  <input id="menu02" type="radio" name="tab_menu"><label class="tab_menu" for="menu02">メニュー項目 2</label>
  <input id="menu03" type="radio" name="tab_menu"><label class="tab_menu" for="menu03">メニュー項目 3</label>
  <div class="tab_contents" id="menu01">
  コンテンツ内容 1
  </div>
  <div class="tab_contents" id="menu02">
  コンテンツ内容 2
  </div>
  <div class="tab_contents" id="menu03">
  コンテンツ内容 3
  </div>
  </div>
{{-- <br>
<!-- タブメニュー -->
<div class="p-tab">
<input type="radio" name="tab_item" id="tab_radio_A" class="p-tab__tab_radio" checked>
<label for="tab_radio_A" class="p-tab__menu_a">個人</label>

<input type="radio" name="tab_item" id="tab_radio_B" class="p-tab__tab_radio">
<label for="tab_radio_B" class="p-tab__menu_b">店舗</label>

<input type="radio" name="tab_item" id="tab_radio_C" class="p-tab__tab_radio">
<label for="tab_radio_C" class="p-tab__menu_c">自治体</label>
</div>

  <!-- タブ個人 表示内容 -->
<div class="p-tab-contains">
<div id="tab_contains_A" class="p-tab-contains__tab_contains_a">
  <h5>アカウント仮登録</h5>
  <input class="tab-mail" type="text" name="mail" placeholder="メールアドレス"><br>
  <input class="p-tab-contains__tab-button" type="submit" name="submit" value="送信">
</div>

  <!-- タブ店舗 表示内容 -->
<div id="tab_contains_B" class="p-tab-contains__tab_contains_b">
  <h5>アカウント仮登録</h5>
  <input class="tab-mail" type="text" name="mail" placeholder="メールアドレス"><br>
  <input class="p-tab-contains__tab-button" type="submit" name="submit" value="送信">
</div>

  <!-- タブ自治体 表示内容 -->
<div id="tab_contains_C" class="p-tab-contains__tab_contains_c">
  <h5>アカウント仮登録</h5>
  <input class="tab-code" type="text" name="code" placeholder="自治体認証コード"><br>
  <input class="tab-mail" type="text" name="mail" placeholder="メールアドレス"><br>
  <input class="p-tab-contains__tab-button" type="submit" name="submit" value="送信">
</div>
</div> --}}
@endsection