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
                    @csrf
                <label for="user_name" class="form-label">ユーザー名</label>
                <input type="text" class="form-control" id="user_name" value="{{ $human->name }}">
                <label for="mail" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="mail" value="{{ $human->email }}">
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
                <form action="mindfulness_start">
                <a href="#"><button class="p-mypage-store__btn"><img src="./img/mindfulness.jpeg" width="150" height="180"></a>
                </form>    
            </div>
        </div>
        <div class="p-mypage-store__middle">
            <label for="self">自己紹介文</label>
            <textarea class="form-control p-mypage-store__textarea" name="self_introduction" id="self" cols="30" rows="4"></textarea>
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
            <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
            <form action="mypage_set">
                <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
            </form>
            <a href="#"><button class="p-mypage-setting__btn"> フォロワー登録・編集</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
            <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
        </div>
    </div>
</div>
@endsection