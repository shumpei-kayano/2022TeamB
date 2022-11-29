{{-- 既存のオープンチャットに参加する --}}
@extends('layouts.layout')   
@section('title')
    オープンチャットに参加する
@endsection

@section('main')
<div class="p-large_bg">
    <div class="p-large_bg__card_bg">   {{-- チャット関連の背景色 --}}
        
    <div class="p-large_bg__preview_camera">
        <div class="p-new_create_block__camera">
            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
            </svg>
            </div>
    </div>
        
     
    <div class="p-new_create_block">
       <div class="p-new_create_block__space"></div>
        <div class="p-new_create_block__display">
        <textarea name="" id="" cols="100" rows="2">【悩み】気軽に相談</textarea><br>
        <textarea name="" id="" cols="100" rows="2">メンバー　45</textarea><br>
        <textarea name="" id="" cols="100" rows="2">説明ダミー説明ダミー説明ダミー説明ダミー説明ダミー</textarea><br>
        <form action="open_chat_room">
            <input class="p-large_bg__check_btn" type="submit" value="参加する">
        </form>
    </div>
    </div>
</div>
</div>


@endsection