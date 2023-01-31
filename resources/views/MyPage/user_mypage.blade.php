@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-mypage-store">
    <div class="p-mypage-store__left">
        <div class="p-mypage-store__top">
            <div class="p-mypage-store__input">
                <form action="{{'add'}}" method="post">
                <label for="user_name" class="form-label">ユーザー名</label>
                <input type="text" class="form-control" id="user_name" value="{{ $human->name }}">
                <label for="mail" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="mail" value="{{ $human->email }}">
            </div>
            {{--  カテゴリを選択  --}}
            <div class="p-mypage-store__hobby">
                <div class="p-mypage-store__hobby1">
                    <label for="hobby" class="form-label">趣味</label>
                    <select name="category_id" class="form-select" aria-label="Default select example">
                        <option disabled="" selected="">選択</option>
                    </select>
                </div> 
                <div class="p-mypage-store__hobby2">
                    <select name="category_id" class="form-select" aria-label="Default select example">
                        <option disabled="" selected="">選択</option>
                    </select>
                </div> 
                <div class="p-mypage-store__hobby3">
                    <select name="category_id" class="form-select" aria-label="Default select example">
                        <option disabled="" selected="">選択</option>
                        {{-- @foreach ($items as $item)
                            <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                        @endforeach --}}
                    </select>
                </div> 
            </div>

            <div class="p-mypage-store__mind">
                    {{-- <a href="mindfulness_detail"><button class="p-mypage-setting__btn">マインドフルネス</button></a> --}}
                <a href="mindfulness_detail"><button class="p-mypage-store__btn"><img src="./img/mindfulness.jpeg" width="120" height="165"></a>
                      
            </div>
        </div>
        <div class="p-mypage-store__middle">
            <label for="self">自己紹介文</label>
            <textarea class="form-control p-mypage-store__textarea" name="self_introduction" id="self" cols="30" rows="4"></textarea>
        </div>
    </form>
    <tr>
		<td>予約管理</td>
	</tr>

    <div class="p-mypage-store__beneath">
        <div id="calendar" style="width: 600px; padding-right: 30px; padding-left: 10px;" >
              <iframe src="https://calendar.google.com/calendar/embed?src=287c89bb6ebc5188bb0488b9e9e8a34c2451cf5ce97f1664ce2d8cac5ff76b4f%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="500" height="320" frameborder="0" scrolling="no" ></iframe>
        </div>
        
            <div class="p-mypage-store__events" >
                <tr>
                    <td class="p-mypage-store__events1"><label for="introduction" class="form-label">イベント予約・参加表明・予約履歴一覧</label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                    </td>
               </tr>
               <tr>
                    <td class="p-mypage-store__events2"><label for="introduction" class="form-label"></label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                    </td>
                </tr>
                <tr>
                    <td class="p-mypage-store__events3"><label for="introduction" class="form-label">イベント投稿履歴</label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                    </td>
                </tr>
                <tr>
                    <td class="p-mypage-store__events4"><label for="introduction" class="form-label"></label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                <div class="p-mypage-store__click">
                    <a href="#">もっと見る...Click here</a></div>
            </div>
                </td>
            </tr>
      </div>
        
    </div>

    {{-- 右側のボタン集 --}}
    <div class="p-mypage-store__right">
        <div class="p-mypage-store__btn-container">     
            <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
            <form action="mypage_set">
                <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
            </form>
            <a href="#"><button class="p-mypage-setting__btn">プロフィール登録・編集</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
            <a href="my_posted_blog_list"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
        </div>
    </div>
</div>
@endsection