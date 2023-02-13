{{-- オープンチャット”チャット一覧表示”画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット一覧
@endsection

@section('main')
<div class="p-create_btn_block">
<form action="terms_of_service">
<input class="p-create_btn_block__create-button"  type="submit" value="新規作成">
</form>
</div>

    <div class="p-large_bg_btn__card_bg">   {{-- チャット関連の背景色 --}}
      <div class="p-open_chat_area">
        <div class="col-12" >
          <br>
            <div class="row" style="row-gap: 3ch;"> {{-- アイコン,タイトル,説明の下に余白をとる --}}
              @foreach ($items as $item)
              {{-- <div class="p-large_bg_btn__card_btn2"></div> --}}
              <div class="p-large_bg_btn__card_btn d-flex"onclick="location.href='/open_chat_preview/{{$item->id}}'">
                
                  {{-- {{ $items->created_at }} --}}
                <div class="p-open_chat_area__open_chat_list_icon"><img src="{{ asset('storage/cimg/' . $item->chat_image) }}" class="chat_list_icon"></div>
                <div class="p-open_chat_area__open_chat_list_title"><br><h5><a  style="text-decoration: none; color:black;"  href="open_chat_room/{{$item->id}}">{{ Str::limit($item->title), 55,'(（　＾ω＾）・・・)' }}</a></h5>
                  <p>{{Str::limit($item->room_detail, 100, '…' ) }}</p>
                </div>
              
              </div>
              {{-- <div class="p-large_bg_btn__card_btn3"></div> --}}
              @endforeach
              {{ $items->links() }}          {{-- ページネーションの設定 --}}

            </div>
            </div>
        </div>
    </div><br><br>
  
@endsection