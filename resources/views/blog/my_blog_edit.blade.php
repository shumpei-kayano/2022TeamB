{{-- ブログ編集ページ --}}
@extends('layouts.layout')   
@section('title')
    ブログ編集ページ
@endsection

@section('main')
{{-- 左側 --}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-blog_edit_area__container">
            <div class="p-blog_edit_area__titlearea">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ブログタイトルを入力してください" name="title">
            </div>
            <div class="p-blog_edit_area__phpto_insert">
                <div class="p-blog_edit_area__img"><img src="./img/add_photo.jpeg" width="50px" height="50px"></div>
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

