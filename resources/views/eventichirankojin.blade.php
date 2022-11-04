@extends('layouts.layout')

@section('title')
    イベント募集投稿一覧
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row">
      {{-- 左メニューバー --}}
      <div class="col-2" style="background-color: #f6f6f6">
        左メニューバー<br>
        左メニューバー<br>
        左メニューバー<br>
        左メニューバー<br>
        左メニューバー<br>
        左メニューバー<br>
        左メニューバー<br>
        左メニューバー<br>
      </div>

      {{-- 右側 --}}
      <div class="col-10" style="background-color: #87785A">

        {{-- 右のコンテンツ --}}
        <div class="row" style="background-color: #87785A">
          <div class="col-10" style="background-color: #b4b4b4"></div>
          <div class="col-2" style="background-color: #f6f6f6">
            <button type="button" class="btn btn-outline-warning">イベントの募集をする</button>
          </div>
          {{--  ページタイトル  --}}
          <h3>新着順 イベント募集投稿</h3>
          
          <div class="card" style="width: 18rem;">
            <img src="img/noimage.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">2022.10.31</p>
              <a href="#" class="btn btn-secondary">Go somewhere</a>
            </div>
          </div>
             
        
        </div>
        {{-- 右下のコンテンツ --}}
        <div class="row" style="background-color: #b4b4b4">
          <div class="col-10" style="background-color: #b4b4b4"></div>
          <div class="col-2" style="background-color: #f6f6f6">
            <button type="button" class="btn btn-outline-warning">もっと見る click here</button>
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