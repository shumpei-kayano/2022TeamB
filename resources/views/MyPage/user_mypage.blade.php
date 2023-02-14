@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-mypage-store">
    <div class="p-mypage-store__left">
        <div class="p-mypage-store__top">
            <div class="p-mypage-store__input">
                <label for="user_name" class="form-label">ユーザー名</label>
                <input type="text" class="form-control"value="{{ $human->name }}" disabled>
                <label for="mail" class="form-label">メールアドレス</label>
                <input type="email" class="form-control"value="{{ $human->email }}" disabled>
            </div>
            {{--  カテゴリを選択  --}}
            <div class="p-mypage-store__hobby">
                <div class="p-mypage-store__hobby1">
                    <label for="user_name" class="form-label">趣味</label>
                    <input type="text" class="form-control" id="hobby1" value="{{ $human->hobby1 }}" disabled>
                </div>    
                <div class="p-mypage-store__hobby2">
                    <input type="text" class="form-control" id="hobby2" value="{{ $human->hobby2 }}" disabled>
                </div>    
                <div class="p-mypage-store__hobby3">
                    <input type="text" class="form-control" id="hobby3" value="{{ $human->hobby3 }}" disabled>
                </div>    
            </div>

            <div class="p-mypage-store__mind">
                    {{-- <a href="mindfulness_detail"><button class="p-mypage-setting__btn">マインドフルネス</button></a> --}}
                <a href="mindfulness_detail"><button class="p-mypage-store__btn"><img src="./img/mindfulness.jpeg" width="120" height="165"></a>
                      
            </div>
        </div>
        <div class="p-mypage-store__middle">
            <label for="self">自己紹介文</label>
            <textarea  class="form-control p-mypage-store__textarea" name="self_introduction" id="self" cols="30" rows="4" style="height: 100px" disabled>{{ $human->self_introduction }} </textarea>
        </div>
    <tr>
		<td>予約管理</td>
	</tr>

    <div class="p-mypage-store__beneath">

        <div id="calendar" style="width: 600px; padding-right: 30px; padding-left: 10px;" >
              <iframe src="https://calendar.google.com/calendar/embed?src=287c89bb6ebc5188bb0488b9e9e8a34c2451cf5ce97f1664ce2d8cac5ff76b4f%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0;" width="500" height="320" frameborder="0" scrolling="no" ></iframe>
        </div>
        
            <div class="p-mypage-store__events" >
                <tr>
                    <td class="p-mypage-store__events1"><label for="introduction" class="form-label">イベント予定・参加表明</label>
                        @foreach ($joinEvents as $event)
                        <disabled  type="text" class="form-control" id="introduction" placeholder="">
                        <a href="/event014/{{$event->event_id}}">
                        {{ $event->event->event_title }} </a>
                        </disabled>
                        @endforeach
                    </td>
               </tr>
               {{--  <tr>
                    <td class="p-mypage-store__events2"><label for="introduction" class="form-label"></label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                    </td>
                </tr>  --}}
                <tr>
                    <td class="p-mypage-store__events3"><label for="introduction" class="form-label">イベント投稿履歴</label>
                        @foreach ($items as $item) 
                        <disabled  type="text" class="form-control" id="introduction" placeholder="">
                        <a href="/event014/{{$item->id}}">
                        {{ $item->event_title }} </a>
                        </disabled>
                        @endforeach 
                    </td>
                </tr>
                <tr>
                    <div class="p-mypage-store__click">
                    <a href="#">もっと見る...Click here</a>
                    </div>
                </tr>
            </div>

      </div>
    </div>

    {{-- 右側のボタン集 --}}
    <div class="p-mypage-store__right">
        <div class="p-mypage-store__btn-container">     
            <div class="eventadd__img-container">
                {{--  デフォルト画像noimage  --}}
                @if($human->icon == null)
                <img src="img/noimage.jpg" class="user_mypage_icon" alt="">
                @else
                    <img src="{{ asset('storage/userimg/' . $human->icon) }}" class="user_mypage_icon" alt="写真がありません">
                @endif
               
            </div><br>
                <a href="mypage_set"><button class="p-mypage-setting__btn">設定</button></a>
            <form action="user_edit/{{ $human->id }}" method="get">
              <a> <button class="p-mypage-setting__btn">プロフィール登録・編集</button></a>
            </form>
            {{--  <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>  --}}
            <a href="event015"><button class="p-mypage-setting__btn"> イベント投稿</button></a>
            <a href="my_posted_blog_list"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
            <a href="open_chat_list"><button class="p-mypage-setting__btn"> チャット</button></a>
            {{--  <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>  --}}
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


try{
    $dsn = 'mysql:dbname=usagi_db'

    $pdo = new PDO($dsn);

    $name = $POST['name'];
    $email = $POST['email'];
    $hobby1 = $POST['hobby1'];
    $hobby2 = $POST['hobby2'];
    $hobby3 = $POST['hobby3'];
    $self_introduction = $POST['self_introduction'];

    $sql = "INSERT INTO contents (name, email, hobby1, hobby2, hobby3, self_introduction) VALUES (:name, :emial, :hobby1, :hobby2, :hobby3, :self_introduction)";
    $stmt = $pdo->prepare($sql);
    $params = array(':name' => $name, ':email' => $email, ':hobby1' => $hobby1, ':hobby2' => $hobby2, ':hobby3' => $hobby3, ':self_introduction' => $self_introduction);
    $stmt->execute($params);
}


</script>
@endsection