{{-- ブログ詳細ページ表示 --}}

@extends('layouts.layout')   
@section('title')
    ブログ詳細ページ表示
@endsection

@section('main')
<div class="container-fluid">
    <div class="row">

    {{-- 左メニューバー --}}
    @component('components.left',['categories'=>$categories])
    @endcomponent


{{-- 右側 --}}
<div class="col-10"> 
<div class="row">

            {{-- 新着ブログ一覧表示スペースの背景色 --}}
            <div class="col-12 c-bgcolor--darkbrown">   
                <div class="row" >
                <div class="create_btn">
                    <a class="p-large_bg_btn__back" href="{{URL::to('new_blog_list')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
                </div>
            
                {{-- ブログ詳細ページの背景色 --}}
                <div class="p-blog_area">   
                    <div class="p-blog_area__white_bg">
                    <div class="col-12">
                    <div class="row" >
                    <div class="d-flex">
                        {{-- ユーザアイコンを表示/アイコンクリックで、ユーザマイページへ画面遷移 --}}
                        {{-- @authで、ログイン時のみ投稿ユーザマイページを閲覧できるように設定  --}}
                        <div class="p-blog_area__user_icon" @auth onclick="location.href='/user1/{{$data->user->id}}'" @endauth>
                            <img src="{{ asset('storage/userimg/' . $data->user->icon)  }}" class="p-blog_area__user_icon" alt="写真がありません">
                        </div>
                        

                        {{-- 投稿者をDBから取得して表示/@authで、ログイン時のみ投稿ユーザマイページを閲覧できるように設定 --}}
                        <div class="p-blog_area__user_name"><p class="p-blog_area__user_name1" @auth onclick="location.href='/user1/{{$data->user->id}}'" @endauth>投稿者：{{$data->user->name}}</p></div>  
                        {{-- 投稿日をDBから取得して表示 --}}          
                        <div class="p-blog_area__user_data">投稿日：{{$data->created_at}}</div>         
                    </div>
                    </div>

                    {{-- ブログタイトルエリア --}}
                    <div class="p-blog_area__titlearea">
                        {{-- DBからタイトルを取得してくる --}}
                        <h2>{{$data->title}}</h2>           
                    </div>

                    {{-- ブログテキストエリア --}}
                    <div class="p-blog_area__textarea">
                        {{-- DBから本文を取得してくる／本文右横にスクロールバー表示 --}}
                        <div class="p-blog_area__textarea_scroll_bar">
                        {{-- {{ }}を{!! nl2br( ) !!} に変える事で、フォームの改行を<br>に自動変換する --}}
                        <p>{!! nl2br($data->text)!!}        
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