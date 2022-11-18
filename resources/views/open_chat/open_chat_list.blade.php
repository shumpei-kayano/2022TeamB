{{-- オープンチャット”チャット一覧表示”画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット一覧
@endsection

@section('main')
<div class="create_btn">
<form action="terms_of_service">
<input class="p-large_bg_btn__create-button"  type="submit" value="新規作成">
</form>
</div>
{{-- <div class="p-large_bg_btn"> --}}
    <div class="p-large_bg_btn__card_bg">   {{-- チャット関連の背景色 --}}
      <div class="p-open_chat_area">
        <div class="col-12">
            <div class="row" style="row-gap:50px"> {{-- アイコン,タイトル,説明の下に余白を20pxとる --}}
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>Python質問</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex justify-content-around">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex justify-content-around">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex justify-content-around">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex justify-content-around">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex justify-content-around">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex justify-content-around">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
            </div>
            <div class="click"><a href="#">もっと見る...Click here</a></div><br>
            </div>
        </div>
    </div>
  {{-- </div> --}}
@endsection