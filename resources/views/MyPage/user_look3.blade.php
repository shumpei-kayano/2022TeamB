@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-user3-mypage">
	<div class="p-user3-mypage__left">
    <div class="p-user3-mypage__a">
    <table>
      <tbody>
        <div class="p-user3-mypage__municipality">
          <div class="p-user3-mypage__name"><label for="municipality" class="form-label">団体名</label>
						<disabled  type="text" class="form-control" id="municipality" placeholder=""  style="width: 450px"></disabled>
					</div>
    
          <div class="p-user3-mypage__tel"><label for="municipality" class="form-label">電話番号</label>
						<disabled  type="text" class="form-control" id="tel" placeholder="" style="width: 450px"></disabled>
          </div>
      
          <div class="p-user3-mypage__address"><label for="municipality" class="form-label">住所</label>
						<disabled  type="text" class="form-control" id="address" placeholder=""  style="width: 450px"></disabled>
          </div>
        </div>

          <div class="p-user3-mypage__introduction"><label for="introduction" class="form-label">紹介文</label>
						<disabled  type="text" class="form-control" id="introduction" placeholder="" style="height: 100px"></disabled>
					</div>
        <tr>
          <td class="p-user3-mypage__events1"><label for="introduction" class="form-label">イベント募集（新着順）</label>
						<disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
					</td>
        </tr>
        <tr>
          <td class="p-user3-mypage__events2"><label for="introduction" class="form-label"></label>
						<disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
					</td>
        </tr>
        <tr>
          <td class="p-user3-mypage__events3"><label for="introduction" class="form-label"></label>
						<disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
					</td>
        </tr>
      </tbody>
    </table>
    <div class="p-mypage-store__click">
			<a href="#">もっと見る...Click here</a></div><br>
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