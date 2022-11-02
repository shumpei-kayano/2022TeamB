<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <title>@yield('title')</title>
</head>
<body>
    <header class="p-header">
        <nav class="navbar navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="/img/logo_hane.png" alt="" >
            </a>
          </div>
        </nav>
    </header>
    <div class="main">
        @yield('main')
    </div>
</body>
</html>



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