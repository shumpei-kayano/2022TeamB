{{-- 新着ブログ記事一覧表示 --}}

@extends('layouts.layout')   
@section('title')
    新着ブログ記事一覧表示
@endsection

@section('main')
<div class="container-fluid">
    <div class="row">

      {{-- 左メニューバー --}}
      @component('components.left')
      @endcomponent
      {{-- 右側 --}}
        <div class="col-10"> 
        <div class="row">
          {{-- 新着ブログ一覧表示スペースの背景色 --}}
            <div class="col-12 c-bgcolor--darkbrown">
              {{-- タイトル --}}                
                <div class="p-blog_edit_area__blog_title">【新着ブログ一覧】</div><br>  

                {{-- DBから記事データを @foreach で取り出す --}}
                @foreach($data as $datas)     
                {{-- 記事ごとの背景色(白) --}}                    
                  <div class="p-blog_edit_area__new_blog_post">   
                  <div class="col-12">
                      <div class="d-flex">
                        {{-- ユーザアイコンの表示 --}}
                        <div class="p-blog_edit_area__open_chat_list_icon">     
                        {{-- SVGデータでアイコン表示 --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        </div>

                        {{-- DBからブログタイトルエリア(idで単独ページ情報)を取得 --}}
                        <div class="p-blog_edit_area__open_chat_list_title">      
                          <h5>
                            {{-- 投稿日時をDBから取得し表示する/20文字だけ表示で時刻は非表示に --}}
                            <a href="/blog_show/{{$datas->id}}" style="text-decoration: none; color:black;"> 【{{Str::limit($datas->created_at, 20, '' ) }}】</a>
                            {{-- ブログタイトルをDBから取得し表示する/日付も含めて50文字表示する/ 50文字以上の場合は(...)で表示する --}}
                            <a href="/blog_show/{{$datas->id}}" style="text-decoration: none; color:black;"> {{Str::limit($datas->title, 50, '…' ) }}</a>
                          </h5>     

                          {{--<hr> は、水平方向の罫線 --}}  
                          <hr> 

                        <div class="p-blog_edit_area__blog_text_small">
                        {{-- DBから記事本文データを取得／本文が50文字以上の場合は(...)で表示する --}}
                        <a href="/blog_show/{{$datas->id}}" style="text-decoration: none; color:black;">{!! nl2br(e(Str::limit($datas->text, 100,'…'))) !!} </a>
                        </div>   

                      </div>
                      </div>
                  </div>
                  </div>
                @endforeach

                {{-- ページネーションの設定 --}}
                {{ $data->links() }} 
            </div>
        </div>
      </div>
    </div>
</div>


@endsection

