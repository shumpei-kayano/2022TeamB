{{-- 既存のオープンチャットに参加する --}}
@extends('layouts.layout')   
@section('title')
    オープンチャットに参加する
@endsection

@section('main')

<div class="p-large_bg">
    
    <div class="p-large_bg__card_bg">   {{-- チャット関連の背景色 --}}
        

  
            <img src="{{ asset('storage/cimg/' . $data->chat_image) }}" class="chat_preview_icon">
           

        
     
    <div class="p-new_create_block">
        <div class="p-new_create_block__display">
        <h1>{{ $data->title }}</h1><br>
        <div class="chat_preview_detail"><br><p>{{ $data->room_detail }}</p><br></div><br>
        <form action="/open_chat_room/{{ $data->id }}">
            <input class="p-large_bg__check_btn" type="submit" value="参加する">
        </form>
    </div>
    </div>
</div>
</div>


@endsection