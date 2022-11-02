@extends('layouts.layout')

@section('title')
    トップ
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row">
      {{-- 左メニューバー --}}
      <div class="col-2" style="background-color: aliceblue">
        左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　左メニューバー　
      </div>
      {{-- 右側 --}}
      <div class="col-10" style="background-color: red"> 
        {{-- おすすめ写真表示 --}}
        <div class="row" style="background-color: aqua">おすすめ写真表示機能　おすすめ写真表示機能　おすすめ写真表示機能　おすすめ写真表示機能　おすすめ写真表示機能　おすすめ写真表示機能　おすすめ写真表示機能　おすすめ写真表示機能　おすすめ写真表示機能　</div>
        <div class="row">
            {{-- エリアから探す --}}
            <div class="col-6 c-bgcolor--brown">
              エリアから探す　エリアから探す　エリアから探す　エリアから探す　エリアから探す　エリアから探す　エリアから探す　エリアから探す　エリアから探す　エリアから探す　エリアから探す　
            </div>
            <div class="col-6 c-bgcolor--yellow">
              新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　新着ブログ　
            </div>
        </div>

      </div>
    </div>
  </div>
  @endsection




{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">

    <div class="p-header">
    {{-- ロゴマークとロゴ --}}
      {{-- <div class="symbol">
        <img src="/img/logo_hane.png" alt="ロゴマーク">
        <img src="img/logo_usagi.png" alt="ロゴ">
      </div> --}}
    {{-- ヘッダー検索機能 --}}
    {{-- <div class="header-searchbox">
            <input class="search" type="search" name="search" placeholder="キーワードを入力">
            <input type="submit" name="submit" value="検索">
            <input type="submit" name="submit" value="ログイン">
    </div> --}}
    {{-- ヘッダー検索機能ここまで --}}
  {{-- </div>
</head>
<body>
    
</body>
</html> --}} 