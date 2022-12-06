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
            <div class="col-12 c-bgcolor--darkbrown">   {{-- 新着ブログ一覧表示スペースの背景色 --}}
                <div class="p-blog_edit_area__blog_title">【新着ブログ一覧】</div><br>
                
                  <div class="p-blog_edit_area__new_blog_post">
                    @foreach($data as $datas)
                  <div class="col-12">
                      <div class="d-flex">
                      <div class="p-blog_edit_area__open_chat_list_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div>

                      <div class="p-blog_edit_area__open_chat_list_title">
                        {{-- <div class="content"> --}}
                        <h5>{{$datas->title}}</h5>
                        <hr>                          {{--<hr> は、水平方向の罫線 --}}
                        {{-- </div> --}}
                        <div class="p-blog_edit_area__blog_text_small"><p>{{$datas->text}}</p></div>
                      </div>
                    </div>
                    
                    </div>
                  </div>
                  @endforeach
            </div>
        </div>
    </div>
</div>
</div>


@endsection