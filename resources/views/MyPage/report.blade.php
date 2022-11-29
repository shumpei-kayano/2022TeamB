@extends('layouts.layout')
@section('title')
    通報画面
@endsection

@section('main')

<form action="/complete_report">
<div class="p-small_bg">
    
    <div class="p-small_bg__card_bg"><br>
        {{-- <a href="{{URL::to('/')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="40px" class="p-small_bg__logo_img"></a> --}}
    <h4>通報する理由を以下から選んでください</h4>

    <br>

        <p class="p-small_bg__tuuhou_razio"><br>
            <input type="radio" name="q1" value="はい"> 迷惑行為　<br><br>
            <input type="radio" name="q1" value="いいえ"> その他　理由を入力してください
            </p>
    
    <textarea class="tuuhoutext"></textarea>
    </div>

        
      
    
</div>

<div class="tuuhou_bun"><h6>通報する当該ユーザの情報と受信した直近10件のトーク内容または指定した投稿内容を送信します。</h6>
</div>

<div class="tuuhou_btn"><button class="p-mypage-setting__btn">同意して送信する</button></div>

</form>

@endsection 