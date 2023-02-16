{{-- 新着ブログ記事一覧表示 --}}

@extends('layouts.layout')   
@section('title')
    新着ブログ記事一覧表示
@endsection

@section('main')
<div class="container-fluid">
    <div class="row">

      {{-- 左メニューバー／カテゴリーをDBから取得する--}}
      @component('components.left',['categories'=>$categories])
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
                          {{-- ユーザアイコンを表示 --}}
                        <div class="p-blog_edit_area__open_chat_list_icon">
                          <img src="{{ asset('storage/userimg/' . $datas->user->icon)  }}" class="p-blog_edit_area__new_blog_list_icon" alt="写真がありません">
                        </div>

                          {{-- DBからブログタイトルエリア(idで単独ページ情報)を取得 --}}
                          <div class="p-blog_edit_area__open_chat_list_title">      
                            <h5>
                              {{-- 投稿日時を created_at でDBから取得し表示する/20文字だけ表示 --}}
                              <a href="/blog_show/{{$datas->id}}" style="text-decoration: none; color:black;"> 【{{Str::limit($datas->created_at, 10, '' ) }}】</a>
                            </h5>
                            <h5>
                              {{-- ブログタイトルを title でDBから取得し表示する/日付も含めて50文字表示する/ 50文字以上の場合は(...)で表示する --}}
                              <a href="/blog_show/{{$datas->id}}" style="text-decoration: none; color:black;"> {{Str::limit($datas->title, 40, '…' ) }}</a>
                            </h5>

                            {{--<hr> は、水平方向の罫線 --}}  
                           {{--  <hr> --}}

                            {{-- <div class="p-blog_edit_area__blog_text_small"> --}}
                              {{-- DBから記事本文データを text で取得／DBから装飾タグ含めて70文字まで表示(※※※※※※70文字以上だとページレイアウト崩れるので変更しない※※※※※※)--}}
                              {{-- <a href="/blog_show/{{$datas->id}}" style="text-decoration: none; color:black;">{!! nl2br((Str::limit($datas->text, 10))) !!} </a> --}}
                            {{-- </div> --}}
                          </div>
                        </div>
                    </div>
                  </div>
                @endforeach

                {{-- ページネーションの設定 --}}
                <div class="p-blog_edit_area__paginate_container">
                {{ $data->links() }}
                </div>
            </div>
        </div>
      </div>
    </div>
</div>



@endsection

