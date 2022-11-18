@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-user2-mypage">
  <div class="p-user2-mypage__left">
    <table>
      <tbody>
        <tr>
          <td class="p-user2-mypage__kojin"><label for="kojin" class="form-label">ユーザー名</label>
						<input type="text" class="form-control" id="kojin" placeholder="">
            <label for="self">自己紹介文</label>
            <textarea class="form-control p-mypage-store__textarea" name="self" id="self" cols="30" rows="4"></textarea>
					</td>
        </tr>
        </tbody>
      </table>

        <div class="p-user2-mypage__hobby">
          <label for="hobby1" class="form-label">趣味①
          <input type="text" class="form-control" id="hobby1" placeholder=""></label>
          <label for="hobby2" class="form-label">趣味②
          <input type="text" class="form-control" id="hobby2" placeholder=""></label>
          <label for="hobby3" class="form-label">趣味③
          <input type="text" class="form-control" id="hobby3" placeholder=""></label>
        </div>
    </div>
    <div class="p-user-mypage__right">
      <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
      <a href="#"><button class="p-user-mypage__btn"> DM送信</button></a>
      <a href="#"><button class="p-user-mypage__btn"> フォローする</button></a>
      <a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
      <a href="#"><button class="p-user-mypage__btn"> ブログを読む</button></a>
      <a href="#"><button class="p-user-mypage__btn--red"> 通報する</button></a>

    </div>
</div>
  @endsection