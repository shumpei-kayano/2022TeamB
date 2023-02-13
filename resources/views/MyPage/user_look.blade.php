@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-user2-mypage">
  <div class="p-user2-mypage__left">
    <div class="p-user2-mypage__a">
    <table>
      <tbody>
          <div class="p-user2-mypage__kojin"><label for="kojin" class="form-label">ユーザー名</label>
						<input  type="text" class="form-control" id="kojin" value="{{ $data->name }}" disabled></div>
            <div class="p-user2-mypage__c"><label class="p-user2-mypage__c" for="self">自己紹介文</label>
            <textarea  class="form-control p-mypage-store__textarea" name="self" id="self" cols="30" rows="4" style="height: 200px"  disabled>{{ $data->self_introduction }}</textarea>
          </div>
        </tbody>
      </table>

        <div class="p-user2-mypage__hobby">
          <label for="hobby1" class="form-label">趣味①
          <input  type="text" class="form-control" value="{{ $data->hobby1 }}" disabled></label>
          <label for="hobby2" class="form-label">趣味②
            <input  type="text" class="form-control" value="{{ $data->hobby2 }}" disabled></label>
          <label for="hobby3" class="form-label">趣味③
            <input  type="text" class="form-control" value="{{ $data->hobby3 }}" disabled></label>
        </div>
    </div>
    </div>
    <div class="p-user2-mypage__right">
      <img src="{{ asset('storage/userimg/' . $data->icon) }}" width="200px" height="200px" class="user1_icon"><br><br><br><br>
      <a href="#"><button class="p-user-mypage__btn"> DM送信</button></a>
      <a href="#"><button class="p-user-mypage__btn"> フォローする</button></a>
      <a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
      <a href="posted_blog/{id}"><button class="p-user-mypage__btn"> ブログを読む</button></a>
      <a href="#"><button class="p-user-mypage__btn--red"> 通報する</button></a>

    </div>
</div>
  @endsection