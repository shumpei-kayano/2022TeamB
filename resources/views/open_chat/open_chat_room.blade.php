{{-- オープンチャットプレビュー画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャットプレビュー画面
@endsection

@section('main')
<div class="create_btn">
        <a class="p-large_bg_btn__back" href="{{URL::to('open_chat_preview')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
</div>

<div class="p-large_bg_btn__card_bg">   {{-- チャット関連の背景色 --}}
    <div class="p-open_chat_area">
    </div>
</div>

@endsection



{{-- <div class="open_chat_container">
    <div class="d-flex justify-content-between" style="margin-top:20px; margin-left:200px;" >
    <form action="open_chat_preview">
    <input type="image" src="img/back.png" alt="" width="25px" height="25px">
    </form>
    <p>オープンチャットルームのタイトルが入ります</p>
    <div class="d-flex">
        <input class="p-large_bg_btn__create-close_button" type="submit" value="閉鎖する">
        <input class="p-large_bg_btn__create-leave_button"  type="submit" value="退室する" style="margin-left: 5px;">
    </div>
    </div>
</div> --}}


{{-- <div class="p-large_bg_textarea">
    <div class="p-large_bg_textarea__card_bg1">   {{-- トークルームやりとりの背景色 --}}
    {{-- </div> --}} 

{{-- <div class="p-large_bg_textarea__card_bg2">  --}}  {{-- メッセージ送信欄の背景色 --}}
    {{-- <div class="p-header__search">
        <input class="p-header__searchbox" type="search" name="search" placeholder="メッセージを入力して、送信ボタンをクリックしてください" width="1000px">
        <input class="p-header__search-button" type="submit" name="submit" value="送信">
      </div>
</div> --}}