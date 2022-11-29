{{-- プライベートチャットトークルーム画面 --}}
@extends('layouts.layout')   
@section('title')
    プライベートチャットトークルーム画面
@endsection

@section('main')
<div class="open_chat_container">
    <div class="d-flex justify-content-between" style="margin-top:20px; margin-left:150px;" >
    <form action="open_chat_preview">
        {{-- 戻るボタンをクリックするとマイページの参加中チャット一覧ページに戻る　※まだ一覧ページは未着手 --}}
        <a class="p-large_bg_btn__back" href="{{URL::to('open_chat_preview')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
    </form>
</div>
</div>

<div class="p-large_bg_btn__card_bg_half">   {{-- チャット関連の背景色 --}}

</div>
<div class="p-large_bg_btn__card_bg_message_half">
    <div class="p-large_bg_btn__card_bg_message_send">
        <input type="text" class="form-control" placeholder="メッセージを入力して、送信ボタンをクリックしてください" aria-label="Recipient's username" aria-describedby="button-addon2"></div>
        <button class="p-large_bg_btn__card_bg_message_send1" type="button">送信</button>
</div>
@endsection

