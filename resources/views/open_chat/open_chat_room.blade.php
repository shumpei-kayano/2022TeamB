{{-- オープンチャットプレビュー画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャットトークルーム画面
@endsection

@section('main')
<div class="open_chat_container">
    <div class="d-flex justify-content-between" style="margin-top:20px; margin-left:150px;" >
    <form action="open_chat_list">
        {{-- 戻るボタンをクリックするとマイページの参加中チャット一覧ページに戻る　※まだ一覧ページは未着手 --}}
        <a class="p-large_bg_btn__back" href="{{URL::to('open_chat_list')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
    </form><h2>{{ $data->title }}</h2>
<div class="d-flex">
    <input class="p-large_bg_btn__create-close_button" type="submit" onclick="location.href='check_close'" value="閉鎖する" style="margin-right:10px;">
    <input class="p-large_bg_btn__create-leave_button"  type="submit" onclick="location.href='check_leaving'" value="退室する" style="margin-right:150px;">
</div>
</div>
</div>

<div class="p-large_bg_btn__card_bg_half">   {{-- チャット関連の背景色 --}}
@foreach($messages as $message)
<div class="p-message" style="z-index:10000"><p>{!! nl2br(e($message->message))!!}</p></div>
@endforeach
</div>
<div class="p-large_bg_btn__card_bg_message_half">{{-- メッセージ送信 --}}
    <div class="p-large_bg_btn__card_bg_message_send">
        <form action="/open_chat_room/{{ $room_id }}" method="POST">
            @csrf
            <input type="hidden" name="room_id" value={{ $room_id }}>
        <input name="message" type="text" class="form-control" placeholder="メッセージを入力して、送信ボタンをクリックしてください" aria-label="Recipient's username" aria-describedby="button-addon2"></div>
        <button class="p-large_bg_btn__card_bg_message_send1" type="submit">送信</button>
    </form>
</div>
@endsection


{{-- 
<div class="open_chat_container">
    <div class="d-flex justify-content-between" style="margin-top:20px; margin-left:200px;" >
    <form action="open_chat_preview">
    <input type="image" src="img/back.png" alt="" width="25px" height="25px">
    </form>
    <div class="d-flex">
        <input class="p-large_bg_btn__create-close_button" type="submit" value="閉鎖する">
        <input class="p-large_bg_btn__create-leave_button"  type="submit" value="退室する" style="margin-left: 5px;">
    </div>
    </div>
</div>


<div class="p-large_bg_textarea">
    <div class="p-large_bg_textarea__card_bg1">   {{-- トークルームやりとりの背景色 --}}
   {{--  </div> 
<div class="p-large_bg_textarea__card_bg2">  {{-- メッセージ送信欄の背景色 --}}
   {{--  <div class="p-header__search">
        <input class="p-header__searchbox" type="search" name="search" placeholder="メッセージを入力して、送信ボタンをクリックしてください" width="1000px">
        <input class="p-header__search-button" type="submit" name="submit" value="送信">
      </div>
</div>  --}} 