{{-- オープンチャットプレビュー画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャットプレビュー画面
@endsection

@section('main')
<div class="p-large_bg">
    <div class="p-large_bg__card_bg">   {{-- チャット関連の背景色 --}}
        
    <div class="p-large_bg__preview_camera">
        <div class="p-new_create_block__camera">
            <img src="{{ asset('/img/camera.png') }}" alt="" width="100px" height="80px">
            </div>
    </div>
        
     
    <div class="p-new_create_block">
        <form>
            <a class="p-large_bg__logo_img" href="{{URL::to('create_new_open')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="40px"></a>
        </form>
        <div class="p-new_create_block__display">
        <textarea name="" id="" cols="100" rows="2">タイトルが入ります</textarea><br>
        <textarea name="" id="" cols="100" rows="2">現在参加中のメンバー数が表示されます</textarea><br>
        <textarea name="" id="" cols="100" rows="2">オープンチャットのトークルームの説明が入ります</textarea><br>
        <form action="open_chat_room">
            <input class="p-large_bg__check_btn" type="submit" value="新規作成">
        </form>
    </div>
    </div>
</div>
</div>
@endsection