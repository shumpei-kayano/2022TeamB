@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-mypage-store">
    <div class="p-mypage-store__left">
        <div class="p-mypage-store__top">
            <div class="p-mypage-store__input">
                <form action="{{route('add')}}" method="post">
                    @csrf
                <label for="user_name" class="form-label">ユーザー名</label>
                <input type="text" class="form-control" name='user_name' id="user_name" value="{{ $human->name }}">
                <label for="mail" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" name='mail' id="mail"  value="{{ $human->email }}">
            </div>
            <div class="p-mypage-store__hobby">
                <div class="p-mypage-store__hobby1">
                <label for="hobby" class="form-label">趣味</label>
                <input type="text" class="form-control" name='hobby1' id="hobby" placeholder="趣味①"></div>
                <div class="p-mypage-store__hobby2">
                <input type="text" class="form-control" name='hobby2' id="hobby" placeholder="趣味②"></div>
                <div class="p-mypage-store__hobby3">
                <input type="text" class="form-control" name='hobby3' id="hobby" placeholder="趣味③"></div>
            </div>
            <div class="p-mypage-store__mind">
                {{--  <form action="mindfulness_start">  --}}
                <a href="mindfulness_detail"><button class="p-mypage-store__btn"><img src="./img/mindfulness.jpeg" width="150" height="180"></a>
                {{--  </form>      --}}
            </div>
        </div>
        <div class="p-mypage-store__middle">
            <label for="self">自己紹介文</label>
            <input type="text" class="form-control" name="self_introduction" id="self" cols="30" rows="4" height="500" value="{{ $human->self_introduction }}"></name=>
        </div>
        {{--  編集完了ボタン  --}}
        <button type="submit">編集</button>
    </form>
        <div class="p-mypage-store__middle">
            <table>
                <tbody>
                    <tr>
                        <td>予約管理</td>
                        <td>イベント予約・参加表明・予約履歴一覧</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>ベント投稿履歴</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-mypage-store__click">
            <a href="#">もっと見る...Click here</a></div><br>
        
    </div>

    {{-- 右側のボタン集 --}}
    <div class="p-mypage-store__right">
        <div class="p-mypage-store__btn-container">     
            <div class="eventadd__img-container">
                {{--  デフォルト画像noimage  --}}
                <div id="default_image">
                    <img src="img/noimage.jpg" class="e-imagePreview" alt="写真がありません">
                </div>
                {{-- jsでinput=fileの画像プレビュー https://www.kabanoki.net/1552/  --}}
                <div id="preview" class="e-imagePreview"></div>
                <div class="btn-wrap">
                    <label>
                        <span class="btn eventadd-btn-warning p-event-text c-text-sm">登録
                        <input type="file" name="event_image" onChange="imgPreView(event)" style="display:none" accept="image/png, image/jpeg">
                        </span
                        <button type="button" id="delete" class="btn eventadd-btn-warning p-event-text c-text-sm">削除</button>
                    </label>
                </div>
                {{-- ファイルをアップロードするボタンBootstrap https://qiita.com/zoonaka/items/46d44793827920282f75  --}}                       
            </div>
            <form action="mypage_set">
                <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
            </form>
            <a href="#"><button class="p-mypage-setting__btn">プロフィール登録・編集</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
            <a href="create2"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
        </div>
    </div>
</div>

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