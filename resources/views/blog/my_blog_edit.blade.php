{{-- ブログ編集ページ --}}
@extends('layouts.layout')   
@section('title')
    ブログ編集ページ
@endsection

@section('main')
{{-- 左側 ブログ内容入力欄--}}

{{-- CDN読み込まない場合 --}}
        @section('main')
        {{-- 左側 --}}
        <div class="d-flex"> 
            <div class="row">
            <div class="p-blog_edit_area__container">
            {{-- URLで、この/newpostsendというURLに入力されたデータを送信する --}}
            <form action="/newpostsend" method="post" enctype="multipart/form-data">  
            {{-- なりすましアクセスなどを防ぐコードで、Laravelにフォームを設置する時は必ずこの@csrfを付けないと、フォームが動かない --}}
            @csrf                                  
            <div class="p-blog_edit_area__titlearea">
            {{-- タイトル入力 --}}

            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="タイトルを入力してください（32文字以内）" name="title" value="{{ old('title') }}">
            @if($errors->has('title'))
            <p style="color:rgb(187, 0, 0)">✤ブログタイトルを入力してください</p>
            @endif
            </div>


        <div class="p-blog_edit_area__photo_insert">
            <div class="p-blog_edit_area__img"> 
                {{--  image画像をsvgデータで挿入 --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                </svg>
            </div>

            <input type="file" name="image">
                {{-- <input type="file" name="image"> --}}
                {{-- <form action="{{route('my_blog_edit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" >
                <input type="submit" value="ファイルを選択">
                </form> --}}



        </div>


        <div class="p-blog_edit_area__textarea">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control"  placeholder="文章を入力してください（50,000文字以内）" id="floatingTextarea2" style="height: 100px" name="text" limit="50000">{{ old('text') }}</textarea>
            <label for="floatingTextarea2" style="color: rgb(101, 100, 100);"></label>
            現在の文字数：<span id="moji_suu">0</span>字
            @if($errors->has('text'))
            <p style="color:rgb(187, 0, 0)">✤50,000文字以内で入力してください</p>
            @endif
        </div>
        <input type="submit" class="submitbtn">
            </div>
            </form>
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




{{-- 入力文字数カウントscript --}}
<script>

$(function(){
    //カウントするフィールドを監視
    $("#floatingTextarea2").keyup(function(){
         //現在入力されている文字
        var text = $(this).val();
         //正確にカウントするため改行コード削除
        text = text.replace((new RegExp("\r\n","g")),"");
        text = text.replace((new RegExp("\n","g")),"");
        //現在の文字数
        var count = text.length;
        //管理者が設定した上限文字数
        var moji_limit = $(this).attr("limit");
        //文字数をリアルタイムの表示
        $("#moji_suu").text(count);
        //処理分け
        if(count == 0){
            //字を消して0文字となった場合。
            $("#moji_suu").text("0");
        } else if(count > moji_limit) {
            //上限文字数を超えたら赤色表示
            $("#moji_suu").css("color", "red");
        } else {
            //文字数が範囲内なら色を戻す
            $("#moji_suu").css("color", "");
        }
    });
});
</script>

@endsection

