@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-tenpo-mypage">
    <div class="p-tenpo-mypage__left">
        <div class="p-tenpo-mypage__top">
            <table>
	            <tbody>
		            <tr>
			            <td><label for="tenpo-mypage__name" class="form-label">店舗名</label>
                        <input type="text" class="form-control" id="tenpo-mypage__name" style="width: 400px;" placeholder="もも焼き　じんた"></td>
			            <td><label for="tenpo-mypage__tel" class="form-label">電話番号</label>
                        <input type="text" class="form-control" id="tenpo-mypage__tel" style="width: 350px;" placeholder="000-0000-0000"></td>
		            </tr>
		            <tr>
			            <td><label for="tenpo-mypage-login__mail" class="form-label">メールアドレス（ログイン用）</label>
                        <input type="email" class="form-control" id="tenpo-mypage-login__mail" placeholder="example@aaa.com"></td>
			            <td><label for="tenpo-mypage__address" class="form-label">住所</label>
                        <input type="text" class="form-control" id="tenpo-mypage__address" placeholder=""></td>
		            </tr>
		            <tr>
			            <td></td>
			            <td><label for="tenpo-mypage-contact__mail" class="form-label">メールアドレス（連絡用）</label>
                        <input type="email" class="form-control" id="tenpo-mypage-contact__mail" placeholder="example@bbb.com"></td>
		            </tr>
	            </tbody>
            </table>
        </div>
        <div>
            <label for="self">自己紹介文</label>
            <textarea class="form-control p-tenpo-mypage__textarea" name="self" id="self" cols="30" rows="4"></textarea>
        </div>
        <div class="p-mypage-store__click">
			<a href="#">もっと見る...Click here</a></div><br>
    </div>
    <div class="p-tenpo-mypage__right">
        {{-- <div class="p-mypage-store__btn-container">  --}}
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