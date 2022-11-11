<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <title>@yield('title')</title>
  {{-- noto sansフォントの読み込み --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!--------------------スライダー見た目-------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <!-------------------------------------------------------------------------------------> 

  <!--------------------スライダーjQuery-----------------------------------------------------------> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!------------------------------------------------------------------------------------->  

  <!--------------------スライダー動かすやつ----------------------------------------------->  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <!------------------------------------------------------------------------------------->  
</head>

<body>
  <header class="p-header">
      <div>
        <div>
          <img src="/img/logo.png" height="80px" width="380px" alt="" class="p-logo">
        </div>

      </div>
  </header>
    <div class="main">
        @yield('main')
    </div>
</body>
</html>


{{-- トップページスライド写真JS読み込み --}}

<script>
  $('.slider').slick({
  autoplay: true,       //自動再生
  autoplaySpeed: 2000,  //自動再生のスピード
  speed: 800,           //スライドするスピード
  dots: true,           //スライド下のドット
  arrows: true,         //左右の矢印
  infinite: true,       //永久にループさせる
  });
</script>