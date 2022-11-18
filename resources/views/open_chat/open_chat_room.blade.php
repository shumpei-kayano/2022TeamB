{{-- オープンチャットプレビュー画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャットプレビュー画面
@endsection

@section('main')
<div class="d-flex justify-content-between">
    <input class="p-large_bg_btn__back_join" type="submit" value="＜">
<div class="d-flex">
    <input class="p-large_bg_btn__create-close_button" type="submit" value="閉鎖する">
    <input class="p-large_bg_btn__create-leave_button"  type="submit" value="退室する" style="margin-left: 5px;">
    </div>
</div>
<div class="p-large_bg_textarea">
    <div class="p-large_bg_textarea__card_bg1">   {{-- トークルームやりとりの背景色 --}}
    </div>
    <div class="p-large_bg_textarea__card_bg2">   {{-- メッセージ送信欄の背景色 --}}
        <div class="p-large_bg_textarea__chat_message_input">
            <input class="p-large_bg_textarea__chat_message_input_area" type="text" id="name" name="name" requiredminlength="4" maxlength="" size="100" placeholder="メッセージを入力して、送信ボタンをクリックしてください">
        </div>
    </div>
    </div>
</div>
@endsection