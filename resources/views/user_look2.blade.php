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
						<input type="text" class="form-control" id="tenpo" placeholder="">
					</td>
					<td rowspan="3" class="p-user-mypage__hyouka">店鋪評価</td>
				</tr>
				<tr>
					<td class="p-user-mypage__tel"><label for="tel" class="form-label">電話番号</label>
						<input type="tel" class="form-control" id="tel" placeholder="000-000-0000">
					</td>
				</tr>
				<tr>
					<td class="p-user-mypage__address"><label for="address" class="form-label">住所</label>
						<input type="text" class="form-control" id="address" placeholder="大分県大分市金池南1-1-1">
					</td>
				</tr>
			</tbody>
		</table>
		<tr>
			<td colspan="p-user-mypage__introduction"><label for="text" class="form-label">紹介文</label>
				<input type="text" class="form-control" id="text" placeholder="もも焼き"></td>
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
	</div>
	<div class="p-user-mypage__right">
		<img src="{{ asset('/img/noimage.png') }}" width="200px" height="200px">
		<a href="＃"><button class="p-user-mypage__btn"> DM送信</button></a>
		<a href="＃"><button class="p-user-mypage__btn"> フォローする</button></a>
		<a href="＃"><button class="p-user-mypage__btn"> フォロワー</button></a>
		<a href="＃"><button class="p-user-mypage__btn"> ブログを読む</button></a>
		<a href="＃"><button class="p-user-mypage__btn--red"> 通報する</button></a>
		{{-- <input type="submit" value="設定" class='button' style="text-align: right"><br>
		<input type="submit" value="プロフィール登録・編集" class='button'><br>
		<input type="submit" value="フォロワー"class='button' ><br>
		<input type="submit" value="フォロー中" class='button'><br>
		<input type="submit" value="イベント投稿"class='button' ><br>
		<input type="submit" value="ブログ投稿" class='button'><br>
		<input type="submit" value="チャット"class='button' ><br>
		<input type="submit" value="DM"class='button' ><br> --}}
	</div>
</div>
@endsection