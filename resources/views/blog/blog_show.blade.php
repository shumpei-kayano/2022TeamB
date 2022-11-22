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
                <div class="row">
                <div class="create_btn">
                    <a class="p-large_bg_btn__back" href="{{URL::to('blog_list')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
                </div>
            
                <div class="p-blog_area">   {{-- ブログ詳細ページの背景色 --}}
                    <div class="p-blog_area__gray_bg">
                        aaaaaaa
                    </div>
                </div>
            </div>

            
                
            </div>
        </div>
    </div>
</div>


@endsection