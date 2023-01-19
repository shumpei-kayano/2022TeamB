@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-user-mypage">
	<div class="p-user-mypage__left">
		<table>
			<tbody>
				<tr>
					<td class="p-user-mypage__tenpo"><label for="tenpo" class="form-label">店舗名</label>
						<disabled type="text" class="form-control" id="tenpo" placeholder="">
					</td>
					<td rowspan="3" class="p-user-mypage__hyouka"><br>
						
						<span class="rate-wrap">店鋪評価<span class="rate" style ="--score: {{ 3.7 }}"></span><span class="num">3.7</span></span>
    
				</tr>
				<tr>
					<td class="p-user-mypage__tel"><label for="tel" class="form-label">電話番号</label>
						<disabled  type="tel" class="form-control" id="tel" placeholder="000-000-0000">
					</td>
				</tr>
				<tr>
					<td class="p-user-mypage__address"><label for="address" class="form-label">住所</label>
						<disabled  type="text" class="form-control" id="address" placeholder="大分県大分市金池南1-1-1">
					</td>
				</tr>
			</tbody>
		</table>
		<tr>

			<label for="self">紹介文</label>
            <disabled  class="form-control p-user-mypage_introduction" name="self" id="self" cols="30" rows="4"></disabled>
		</tr>
		<table>
				<tr>
					<td rowspan="3">予約カレンダー</td>
					<td>イベント情報１</td>
				</tr>
				<tr>
					<td>イベント情報２</td>
				</tr>
				<tr>
					<td>イベント情報３</td>
				</tr>
		</table>
		<div class="p-mypage-store__click">
			<a href="#">もっと見る...Click here</a></div><br>


	</div>
	<div class="p-user-mypage__right">
		<form action="/event015" method="post" enctype="multipart/form-data">
            <div class="eventadd__content">
                <div class="eventadd__left">
                    <div class="eventadd__img-container">
                        {{--  デフォルト画像noimage  --}}
                        <div id="default_image">
                            <img src="img/noimage.jpg" class="e-imagePreview" alt="写真がありません" width="200px" height="200px">
                        </div>
		<a href="#"><button class="p-user-mypage__btn"> DM送信</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォローする</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
		<a href="#"><button class="p-user-mypage__btn"> ブログを読む</button></a>
		<a href="#"><button class="p-user-mypage__btn"> 保存</button></a>
		<a href="#"><button class="p-user-mypage__btn--red"> 通報する</button></a>
		
	</div>
</div>
@endsection