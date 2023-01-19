{{-- ブログ詳細ページ表示 --}}

@extends('layouts.layout')   
@section('title')
    ブログ詳細ページ表示
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
                <div class="row" >
                <div class="create_btn">
                    <a class="p-large_bg_btn__back" href="{{URL::to('new_blog_list')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
                </div>
            
                <div class="p-blog_area">   {{-- ブログ詳細ページの背景色 --}}
                    


                    <div class="p-blog_area__white_bg">
                    <div class="col-12">
                        <div class="row" >
                        <div class="d-flex">
                        <div class="p-blog_area__user_icon"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg></div>
                        <div class="p-blog_area__user_name">投稿者：{{$data->user_id}}</div>            {{-- 投稿者をDBから取得して表示 --}}
                        <div class="p-blog_area__user_data">投稿日：{{$data->created_at}}</div>         {{-- 投稿日をDBから取得して表示 --}}
                        </div>
                    </div>

                    <div class="p-blog_area__titlearea">
                        <h2>{{$data->title}}</h2>           {{-- DBからタイトルを取得してくる --}}
                    </div>
                    <div class="p-blog_area__textarea">
                        <div class="p-blog_area__textarea_scroll_bar">
                        <p>{!! nl2br($data->text)!!}        {{-- DBから本文を取得してくる --}}
                        </p>


                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection