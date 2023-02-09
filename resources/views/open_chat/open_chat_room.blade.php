{{-- オープンチャットプレビュー画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャットトークルーム画面
@endsection

@section('main')
<div class="open_chat_container">
    <div class="d-flex justify-content-between" style="margin-top:20px; margin-left:150px;" >
    <form action="open_chat_list">
        {{-- 戻るボタンをクリックするとマイページの参加中チャット一覧ページに戻る--}}
        <a class="p-large_bg_btn__back" href="{{URL::to('open_chat_list')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
    </form><h2>{{ $data->title }}</h2>
<div class="d-flex">
    @if (Auth::user()->id  ==  $data->developer_id)
    <form action="/check_close/{{ $data->id }}" method="get">
    <input type="hidden" name="chat_id" value="{{ $data->id }}">
    <input class="p-large_bg_btn__create-close_button" type="submit" value="閉鎖する" style="margin-right:10px;">
</form>
    @endif
    
    <input class="p-large_bg_btn__create-leave_button"  type="submit" onclick="location.href='{{URL::to('open_chat_list')}}'" value="退室する" style="margin-right:150px;">
</div>
</div>
</div>

<div class="p-large_bg_btn__card_bg_half"> <br>  {{-- チャット関連の背景色 --}}
@foreach($messages as $message) <br>

@if (Auth::user()->id  ==  $message->user_id ) {{-- メッセージテーブルのuser_idが自分のＩＤと同じなのか --}}
<div class="p-message2" ><p style="text-align:left">{{ $message->message }}</p></div> {{-- 自分のコメントは右側 --}}
<div class="p-messagetime2">{{ $message->created_at }}</div><br>

@else
<div class="message_card1">
    <div class="p-messageuser1"><a href="/user1/{{$message->user->id}}" style="text-decoration: none; color:black;">{{ $message->user->name }}</a></div>
<div class="p-message" style="z-index:10000">
    <p style="text-align:left">{{ $message->message }}</p></div>
<div class="p-messagetime1">{{ $message->created_at }}</div>
<div class="message_user_icon1" onclick="location.href='/user1/{{$message->user->id}}'"><img src="{{ asset('storage/userimg/' . $message->user->icon) }}" alt="ユーザーアイコン画像" class="message_user_icon"></div>{{-- 他人ののコメントは左側 --}}

</div>

<br> 

@endif
@endforeach
<div id="hogehoge"></div>
</div>
<div class="p-large_bg_btn__card_bg_message_half">{{-- メッセージ送信 --}}
    <div class="p-large_bg_btn__card_bg_message_send">
        <form action="/open_chat_room/{{ $room_id }}" method="POST">
            @csrf
            <input type="hidden" name="room_id" value={{ $room_id }}>{{-- チャットルームのＩＤをテーブルに入れる --}}
        <input name="message" type="text" class="form-control" placeholder="メッセージを入力して、送信ボタンをクリックしてください" aria-label="Recipient's username" aria-describedby="button-addon2"></div>
        <button class="p-large_bg_btn__card_bg_message_send1" type="submit">送信</button>
    </form>
</div>


<script>
    window.onload = function() {
            window.location.hash = "hogehoge"
        };
</script>

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