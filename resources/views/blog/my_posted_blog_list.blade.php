{{-- 自分自身の投稿済みブログ一覧 --}}
@extends('layouts.layout')   
@section('title')
    投稿済みブログ一覧
@endsection

@section('main')
{{-- 左側 --}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-blog_edit_area__container">
            <div class="p-blog_edit_area__blog_title">   {{-- 投稿済みブログ一覧（大）タイトルエリア --}}
            <h2>【投稿済みブログ一覧】</h2>
            </div>
            <br>
            
            <div class="p-blog_edit_area__blog_post">    {{-- ブログ記事リスト区切りエリア --}}
                <div class="col-12">
                    <div class="d-flex">
                <div class="p-blog_edit_area__blog_icon"></div> 
                <div class="p-blog_edit_area__blog_title_small">
                    <h6>2022.10.22.〇〇〇〇〇〇〇〇〇〇〇〇</h6>
                    <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita</div>
                </div>            
            </div>
            </div>
        </div>
            <div class="p-blog_edit_area__blog_post">    {{-- ブログ記事リスト区切りエリア --}}
                <div class="col-12">
                    <div class="d-flex">
                <div class="p-blog_edit_area__blog_icon"></div> 
                <div class="p-blog_edit_area__blog_title_small">
                    <h6>2022.10.22.〇〇〇〇〇〇〇〇〇〇〇〇</h6>
                    <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita</div>
                </div>            
            </div>
            </div>
            </div>
            <div class="p-blog_edit_area__blog_post">    {{-- ブログ記事リスト区切りエリア --}}
                <div class="col-12">
                    <div class="d-flex">
                <div class="p-blog_edit_area__blog_icon"></div> 
                <div class="p-blog_edit_area__blog_title_small">
                    <h6>2022.10.22.〇〇〇〇〇〇〇〇〇〇〇〇</h6>
                    <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita</div>
                </div>            
            </div>
            </div>
            </div>
            <div class="p-blog_edit_area__blog_post">    {{-- ブログ記事リスト区切りエリア --}}
                <div class="col-12">
                    <div class="d-flex">
                <div class="p-blog_edit_area__blog_icon"></div> 
                <div class="p-blog_edit_area__blog_title_small">
                    <h6>2022.10.22.〇〇〇〇〇〇〇〇〇〇〇〇</h6>
                    <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita</div>
                </div>            
            </div>
            </div>            
            </div>
            <div class="p-blog_edit_area__blog_post">    {{-- ブログ記事リスト区切りエリア --}}
                <div class="col-12">
                    <div class="d-flex">
                <div class="p-blog_edit_area__blog_icon"></div> 
                <div class="p-blog_edit_area__blog_title_small">
                    <h6>2022.10.22.〇〇〇〇〇〇〇〇〇〇〇〇</h6>
                    <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita</div>
                </div>            
            </div>
            </div>
            </div>
            <div class="p-blog_edit_area__blog_post">    {{-- ブログ記事リスト区切りエリア --}}
                    <div class="col-12">
                    <div class="d-flex">
                <div class="p-blog_edit_area__blog_icon"></div> 
                <div class="p-blog_edit_area__blog_title_small">
                    <h6>2022.10.22.〇〇〇〇〇〇〇〇〇〇〇〇</h6>
                    <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita</div>
                </div>            
            </div>
            </div>
            </div>
        </div> 
    </div>

    <div class="d-flex">
    <div class="row">
    <div class="p-blog_edit_area__button">
      {{-- ブログ(編集・投稿・削除)ページの右側ボタンをcomponents使用 --}} 
      @component('components.blog_right')
      @endcomponent
</div>
</div>
</div>
</div>
</div>
@endsection

