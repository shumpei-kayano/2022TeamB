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
            <form action="/newpostsend" method="post">  {{-- URLで、この/newpostsendというURLに入力されたデータを送信する --}}
                @csrf                                   {{-- なりすましアクセスなどを防ぐコードで、Laravelにフォームを設置する時は必ずこの@csrfを付けないと、フォームが動かない --}}
            <div class="p-blog_edit_area__titlearea">
                {{-- タイトル入力 --}}
                <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="ブログタイトルを入力してください" name="title">
                    @if($errors->has('title'))                     {{-- カラム名 --}}
                    <p class="d-flex"><p style="color:rgb(187, 0, 0)">✤50文字以内で入力してください</p>
                    @endif
            </div>
            <div class="p-blog_edit_area__photo_insert">
                <div class="p-blog_edit_area__img"> {{--  image画像をsvgデータで挿入 --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                    </svg>
                </div>
            </div>
            <div class="p-blog_edit_area__textarea">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                {{-- 本文入力 --}}
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" placeholder="文章を入力してください" rows="15"></textarea>
                    @if($errors->has('title'))      {{-- カラム名 --}}
                    <p class="d-flex"><p style="color:rgb(187, 0, 0)">✤50,000文字以内で入力してください</p>
                    @endif
                <input type="submit" class="submitbtn">
            </div>
        </form>
        </div> 
    </div>

    <div class="d-flex">
    <div class="row">
    <div class="p-blog_edit_area__button">
      {{-- ブログ(編集・投稿・削除)ページの右側ボタンにcomponents使用 --}} 
      @component('components.blog_right')
      @endcomponent
</div>
</div>
</div>
</div>
</div>
@endsection

