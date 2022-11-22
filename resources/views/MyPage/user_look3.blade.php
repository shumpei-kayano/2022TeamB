@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-user3-mypage">
	<div class="p-user3-mypage__left">
    <table>
      <tbody>
        <tr>
          <td class="p-user3-mypage__municipality"><label for="municipality" class="form-label">団体名</label>
						<input type="text" class="form-control" id="municipality" placeholder="">
					</td>
        </tr>
        <tr>
          <td class="p-user3-mypage__tel"><label for="municipality" class="form-label">電話番号</label>
						<input type="text" class="form-control" id="tel" placeholder="">
          </td>
        </tr>
        <tr>
          <td class="p-user3-mypage__address"><label for="municipality" class="form-label">団体名</label>
						<input type="text" class="form-control" id="address" placeholder="">
          </td>
        </tr>
        <tr>
          <td class="p-user3-mypage__introduction"><label for="introduction" class="form-label">店舗名</label>
						<input type="text" class="form-control" id="introduction" placeholder="">
					</td>
        </tr>
        <tr>
          <td>イベント募集（新着順）</td>
        </tr>
        <tr>
          <td>イベント情報１</td>
        </tr>
        <tr>
          <td>イベント情報２</td>
        </tr>
        <tr>
          <td>イベント情報３</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="p-user-mypage__right">
		<img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
		<a href="#"><button class="p-user-mypage__btn"> DM送信</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォローする</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
		<a href="#"><button class="p-user-mypage__btn"> ブログを読む</button></a>
		<a href="#"><button class="p-user-mypage__btn--red"> 通報する</button></a>
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