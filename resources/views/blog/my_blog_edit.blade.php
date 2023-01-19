{{-- ブログ編集ページ https://nebikatsu.com/7808.html/　--}}
@extends('layouts.layout')   
@section('title')
    ブログ編集ページ
@endsection


@section('main')
{{-- 左側 ブログ内容入力欄--}}
{{-- CDN読み込まない場合 --}}
        {{-- 左側 --}}
        <div class="d-flex"> 
            <div class="row">
            <div class="p-blog_edit_area__container">
            {{-- URLで、この/newpostsendというURLに入力されたデータを送信する --}}
            <form action="/newpostsend" method="post" enctype="multipart/form-data">  
            {{-- なりすましアクセスなどを防ぐコードで、Laravelにフォームを設置する時は必ずこの@csrfを付けないと、フォームが動かない --}}
            @csrf                                  
            <div class="p-blog_edit_area__titlearea">
            {{-- ブログタイトル入力 --}}
            <tr>
                <td colspan="3">          
                    <label for="exampleInputEmail1" class="form-label"></label>
                    @error('title')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="ブログタイトル（32文字以内）">
                    <div class="form-text" ></div>
                </td>
            </tr>



        {{-- <div class="p-blog_edit_area__photo_insert">
            <div class="p-blog_edit_area__img"> --}} 
                {{--  image画像をsvgデータで挿入 --}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                </svg>
            </div> --}}

            {{-- <input type="file" name="image"> --}}
                {{-- <input type="file" name="image"> --}}
                {{-- <form action="{{route('my_blog_edit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" >
                <input type="submit" value="ファイルを選択">
                </form> --}}



                <div class="p-blog_edit_area__photo_insert">
                    <div class="p-blog_edit_area__img">
                {{--  デフォルト画像noimage  --}}
                <div id="default_image">
                {{--  image画像をsvgデータで挿入 --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                </svg>
                </div>
                {{-- jsでinput=fileの画像プレビュー https://www.kabanoki.net/1552/  --}}
                <div id="preview" class="e-imagePreview"></div>
                <div class="btn-wrap">
                    <label>
                        <span class="btn eventadd-btn-warning p-event-text c-text-sm">登録
                        <input type="file" name="image" onChange="imgPreView(event)" style="display:none" accept="image/png, image/jpeg">
                        </span>
                        <button type="button" id="delete" class="btn eventadd-btn-warning p-event-text c-text-sm">削除</button>
                    </label>
                </div>
            </div>
        </div>
        </div>

         {{--  ブログ内容詳細入力欄  --}}
        <div class="p-blog_edit_area__textarea">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control"  placeholder="文章を入力してください（15,000文字以内）" id="floatingTextarea2" style="height: 100px" name="text" limit="15000">{{ old('text') }}</textarea>
            <label for="floatingTextarea2" style="color: rgb(101, 100, 100);"></label>
            @error('text')<span class="badge bg-danger">必須</span>{{$message}}@enderror
            現在の文字数：<span id="moji_suu">0</span>字
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

{{--  https://www.kabanoki.net/1552/  --}}
<script>
    function imgPreView(event){
        var file = event.target.files[0];
        var reader = new FileReader();
        var preview = document.getElementById("preview");
        var previewImage = document.getElementById("previewImage");
        
        if(previewImage != null) //画像があれば
          preview.removeChild(previewImage);
          // default_image を非表示
          var elem = document.getElementById("default_image");
          elem.style.display = "none";
          
        reader.onload = function(event) {
           var img = document.createElement("img");
           img.setAttribute("src", reader.result);
           img.setAttribute("id", "previewImage");
           preview.appendChild(img);
          
        };
        reader.readAsDataURL(file);
    }    
</script>

@endsection

