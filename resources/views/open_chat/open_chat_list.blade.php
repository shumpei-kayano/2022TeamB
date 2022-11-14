@extends('layouts.layout')   
@section('title')
    オープンチャット一覧
@endsection

@section('main')
<div class="create_btn">
<input class="p-large_bg__create-button" type="submit" value="新規作成">
</div>
<div class="p-large_bg">
    <div class="p-large_bg__card_bg">   {{-- チャット関連の背景色 --}}
      <div class="p-open_chat_area">
        <div class="col-12">
            <div class="row">
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">気軽に相談</div>
              </div>
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">Python質問</div>
              </div>
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">メンタル相談</div>
              </div>
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">生活の相談</div>
              </div>
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">悩みの相談</div>
              </div>
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">気軽に相談</div>
              </div>
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">気軽に相談</div>
              </div>
              <div class="col-6">
                <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title">気軽に相談</div>
              </div>
            </div>
            </div>
            <div class="click"><a href="#">もっと見る...Click here</a></div><br>
        </div>
       
    </div>
  </div>
</div>
@endsection