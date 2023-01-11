<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script type="text/javascript" src="jquery.js"></script>
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


  
  <!-- Quill ブログ機能読み込み-->
  <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

</head>





<body>
  <header class="p-header">
      <div class="p-header__container">
        <div class="p-header__logo">
          {{-- ヘッダーロゴをクリックするトップページを表示 --}}
          <a href="{{URL::to('/')}}"><img src={{asset('/img/logo.png')}} alt="" height="80px" width="380px" class="p-logo_img"></a>
        </div>
        <div class="p-header__search">
          <input class="p-header__searchbox" type="search" name="search" placeholder="キーワードを入力">
          <input class="p-header__search-button" type="submit" name="submit" value="検索">
        </div>

        <div>         
          @guest
              @if (Route::has('register'))
              <div class="p-header__login">
                <form action="/login">
                <input class="p-header__login-button" type="submit" name="submit" value="ログイン">
              </form>
              </div>
              @endif

          @else
              {{-- ログイン後、ヘッダーにログアウトボタンが表示される --}}
              <div class="p-header__login">
                <input class="p-header__login-button" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                type="submit" name="submit" value="ログアウト">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              </div>
              {{-- <form action="user_mypage"><button>myaccount</button></form> --}}
          @endguest
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



//ブログCDN読み込み　後で消すかも
var quill = new Quill('#editor', {
  modules: {
    toolbar: [
       ['bold', 'italic', 'underline', 'strike'],
       [{'color': []}, {'background': []}],
       ['link', 'blockquote', 'image']
     ]
  },
  placeholder: '文章を入力してください',
  theme: 'snow'
}); 


// 回答フォームを送信
document.ansform.subbtn.addEventListener('click', function() {
// Quillのデータをinputに代入
document.querySelector('input[name=text]').value = document.querySelector('.ql-editor').innerHTML;
// 送信
document.ansform.submit();
});


</script>