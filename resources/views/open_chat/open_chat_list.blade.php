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
            <div class="row" style="row-gap: 4ch;"> {{-- アイコン,タイトル,説明の下に余白をとる --}}
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>Python質問</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                <div class="p-open_chat_area__open_chat_list_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></div><div class="p-open_chat_area__open_chat_list_title"><p>気軽に相談</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perferendis, m</p></div>
              </div>
              <div class="click"><a href="#">もっと見る...Click here</a></div><br>
              </div>
            </div>
            </div>
        </div>
    </div>
  
@endsection