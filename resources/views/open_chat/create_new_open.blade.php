{{-- オープンチャット新規作成画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット新規作成
@endsection

@section('main')

<div class="p-large_bg">
    <div class="tyattotukuru">   {{-- チャット関連の背景色 --}}
    <div class="p-new_create_block">
        <form>
        <a class="p-large_bg__logo_img" href="{{URL::to('terms_of_service')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="40px"></a>
        </form>
        <h3>オープンチャット作成</h3>
        <form action="create_new_open" method="POST" enctype="multipart/form-data">  {{--  データベースに格納するよよ --}}
            @csrf
        <div class="eventadd__img-container">
            {{--  デフォルト画像noimage  --}}
            <div id="default_image">
                <img src="{{ asset('/img/circle_camera.png') }}" alt="" width="100px" height="100px">
            </div>
            {{-- jsでinput=fileの画像プレビュー https://www.kabanoki.net/1552/  --}}
            <div id="preview" class="e-imagePreview" ></div>
            <div class="btn-wrap">
                <label>
                    <span class="btn eventadd-btn-warning p-event-text c-text-sm">登録
                    <input type="file" name="chat_image" onChange="imgPreView(event)" style="display:none" accept="image/png, image/jpeg">
                    </span>
                    <button type="button" id="delete" class="btn eventadd-btn-warning p-event-text c-text-sm">削除</button>
                </label>
            </div>
            {{-- ファイルをアップロードするボタンBootstrap https://qiita.com/zoonaka/items/46d44793827920282f75  --}}                       
        </div>
        <div class="p-new_create_block__container" style="margin: 0 auto;">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="オープンチャット名を入力" name="title" value="{{ old('title') }}">
            @if($errors->has('title'))
            <p style="color:rgb(187, 0, 0)">✤オープンチャット名を入力をしてください</p>
            @endif
        </div>

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="room_detail" limit="1000">{{ old('room_detail') }}</textarea>
            <label for="floatingTextarea2" style="color: rgb(101, 100, 100);">説明（１０００文字以内）</label>
            現在の文字数：<span id="moji_suu">0</span>字
            @if($errors->has('room_detail'))
            <p style="color:rgb(187, 0, 0)">✤１０００文字以内で入力してください</p>
            @endif
          </div>
        <br>

        <select class="form-select" aria-label="Default select example" name="category">
            <option value="" disabled selected style="display:none;">【プルダウンでカテゴリを選択】</option>
            @foreach ($items as $item)
                <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
            @endforeach
        </select>
        @if($errors->has('category'))
        <p style="color:rgb(187, 0, 0)">✤カテゴリーを選択してください</p>
        @endif
        <br>
            <input class="p-large_bg__check_btn" type="submit" value="作成">
        
</form>
       
            
       
    </div>
    <br>
</div>

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