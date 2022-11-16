@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
<section>
  {{--  ----------セクション上部---------  --}}
  <div class="upper">
    <div class="upper__left">
      <table class="upper__table">
        <tbody>
          <tr class="upper__tr">
            <th class="upper__th">ユーザー名</th>
            
            <th>趣味</th>
            <tr><td><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" >
              <div id="emailHelp" class="form-text" ></div>
            
              <td><label for="exampleInputEmail1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleInputEmail1" >
                <div id="emailHelp" class="form-text"></td>
            </tr>
          <tr>
            <th>メールアドレス</th>
            <td><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" >
              <div id="emailHelp" class="form-text"></div>
            </div></td>
          </tr>
          <tr>
            <th><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1">
              <div id="emailHelp" class="form-text"></div></div>
            </div></th>
            <td><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" >
              <div id="emailHelp" class="form-text"></td>
          </tr>
          
            
           
        
        </tbody>
      </table>
    </div>
    {{--  マインドフルネス  --}}
    <div class="upper__right">
      マインドフルネス時計
    </div>
  </div>
    {{-- 自己紹介 --}}
    <div class="selfin">
      <label for="exampleFormControlTextarea1" class="form-label">自己紹介</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    {{-- --------- セクション下部 -------- --}}
    {{-- 予約管理 --}}
    <div class="myPcalendar">
       ダミーテキスト
      
      <br></br>
    </div>
    {{-- イベント管理 --}}
    <div class="upper">
    <div class="upper__right">
      <label for="exampleFormControlInput1" class="form-label">イベント予定・参加表明・予定履歴一覧</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" >

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="email" class="form-control" id="exampleFormControlInput1" >

  <label for="exampleFormControlInput1" class="form-label">イベント投稿履歴</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" >

  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="email" class="form-control" id="exampleFormControlInput1" >
</div>
  {{-- button --}}
      
  <div class="p-user-mypage__right">
		<img src="{{ asset('/img/noimage.png') }}" width="200px" height="200px">
		<a href="#"><button class="p-user-mypage__btn"> DM送信</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォローする</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
		<a href="#"><button class="p-user-mypage__btn"> ブログを読む</button></a>
		<a href="#"><button class="p-user-mypage__btn--red"> 通報する</button></a>
      
    </div>
    
</section>
@endsection