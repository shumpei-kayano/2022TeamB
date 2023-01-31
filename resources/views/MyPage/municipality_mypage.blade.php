@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-municipality-mypage">
    <div class="p-municipality-mypage__left">
        <div class="p-municipality-mypage__top">
            <table>
                <tbody>
                    <tr>
                        <td><label for="municipatlity-mypage__name" class="form-label">自治体名</label>
                            <input type="text" class="form-control" style="width: 400px;" id="municipality-mypage__name" placeholder="大原学園"></td>
                        <td><label for="municipality-mypage__tel" class="form-label">電話番号</label>
                            <input type="text" class="form-control" style="width: 350px;" id="municipality-mypage__tel" style="width: 350px;" placeholder="000-0000-0000"></td>
                    </tr>
                    <tr>
                        <<td><label for="municipality-mypage-login__mail" class="form-label">メールアドレス（ログイン用）</label>
                            <input type="email" class="form-control" id="municipality-mypage-login__mail" placeholder="example@aaa.com"></td>
                        <td><label for="municipality-mypage__address" class="form-label">住所</label>
                            <input type="text" class="form-control" id="municipality-mypage__address" placeholder=""></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <label for="self">自己紹介文</label>
            <textarea class="form-control p-municipality-mypage__textarea" name="self" id="self" cols="30" rows="4"></textarea>
        </div>
        <div class="p-municipality-mypage__events" >
                <tr>
                    <td class="p-municipality-mypage__events1"><label for="introduction" class="form-label">現在募集中のイベント一覧</label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                    </td>
               </tr>
               <tr>
                    <td class="p-municipality-mypage__events2"><label for="introduction" class="form-label"></label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                    </td>
                </tr>
                <tr>
                    <td class="p-municipality-mypage__events3"><label for="introduction" class="form-label"></label>
                      <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
                      <div class="p-municipality-mypage__click">
                        <a href="#">もっと見る...Click here</a></div>
                    </div>
                    </td>
                </tr>
        
        </div>
    <div class="p-municipality-mypage__right">
            <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
            <form action="mypage_del">
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
@endsection