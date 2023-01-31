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
		<tr>
		<td>予約管理</td>
	    </tr>
        <div class="p-tenpo-mypage__beneath">
			<div id="calendar" style="width: 600px; padding-right: 30px; padding-left: 10px;" >
				  <iframe src="https://calendar.google.com/calendar/embed?src=287c89bb6ebc5188bb0488b9e9e8a34c2451cf5ce97f1664ce2d8cac5ff76b4f%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="500" height="320" frameborder="0" scrolling="no" ></iframe>
			</div>
			
			    <div class="p-tenpo-mypage__events" >
				    <tr>
					    <td class="p-tenpo-mypage__events1"><label for="introduction" class="form-label">予約状況一覧</label>
						  <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
					    </td>
				   </tr>
				   <tr>
					    <td class="p-tenpo-mypage__events2"><label for="introduction" class="form-label"></label>
						  <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
					    </td>
				    </tr>
				    <tr>
					    <td class="p-tenpo-mypage__events3"><label for="introduction" class="form-label"></label>
						  <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
					    </td>
				    </tr>
				    <tr>
					    <td class="p-tenpo-mypage__events4"><label for="introduction" class="form-label"></label>
						  <disabled  type="text" class="form-control" id="introduction" placeholder=""></disabled>
					<div class="p-tenpo-mypage__click">
						<a href="#">もっと見る...Click here</a></div>
		        </div>
					</td>
				</tr>
		  </div>

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
<script>
	document.addEventListener('DOMContentLoaded', function() {
	  var calendarEl = document.getElementById('calendar');

	  var calendar = new FullCalendar.Calendar(calendarEl, {

		buttonText: {
			today: '今月',
			month: '月',
			list: 'リスト'
			},

		displayEventTime: false,
		googleCalendarApiKey: 'AIzaSyBL-r0qUScggzr4HwVTtLk97UfVD5Oq-vQ',
			events: {
				googleCalendarId: 'f36cd269af73b6e6fab3b187b533325821551b7951515996080f0262c8ccec1e@group.calendar.google.com',
				display: 'background',
				color:"#fffbf8",
				classNames: 'gcal-event',
			},
		eventClick: function(arg) {
		  window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');
		  arg.jsEvent.preventDefault()
		},

		locale: 'ja',
		contentHeight: 'auto',


			dayCellContent: function(e) {
				e.dayNumberText = e.dayNumberText.replace('日', '');
			}
	  });
	  calendar.render();
	});
</script>
@endsection