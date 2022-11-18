@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
  {{--  ----------セクション上部---------  --}}
      <div class="p-UserMypage">
        <div class="p-UserMypage__left">
            <th>ユーザー名</th>
            
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
    <table>
      <tbody>
        <tr>
          <td>予約管理</td>
          <td>イベント予定・参加表明・予定履歴一覧</td>
        </tr>
        <tr>
          <td></td>
          <td>イベント投稿履歴</td>
        </tr>
      </tbody>
    </table>
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