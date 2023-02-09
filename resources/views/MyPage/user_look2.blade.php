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
						<disabled type="text" class="form-control" id="tenpo" placeholder=""></disabled>
					</td>
					<td rowspan="3" class="p-user-mypage__hyouka"><br>
						
						<span class="rate-wrap">店舗評価<span class="rate" style ="--score: {{ 3.7 }}"></span><span class="num">3.7</span></span>
    
				</tr>
				<tr>
					<td class="p-user-mypage__tel"><label for="tel" class="form-label">電話番号</label>
						<disabled  type="tel" class="form-control" id="tel" placeholder="000-000-0000"></disabled>
					</td>
				</tr>
				<tr>
					<td class="p-user-mypage__address"><label for="address" class="form-label">住所</label>
						<disabled  type="text" class="form-control" id="address" placeholder="大分県大分市金池南1-1-1"></disabled>
					</td>
				</tr>
			</tbody>
		</table>
		<tr>

			<label for="self">紹介文</label>
            <disabled  class="form-control p-user-mypage_introduction" name="self" id="self" cols="30" rows="4" style="height: 100px" style="width: 100px"></disabled>
		</tr>
		<tr>
			<td>予約管理</td>
		</tr>
		<div class="p-user-mypage__beneath">
		  <div id="calendar" style="width: 600px; padding-right: 30px; padding-left: 10px;" >
				<iframe src="https://calendar.google.com/calendar/embed?src=287c89bb6ebc5188bb0488b9e9e8a34c2451cf5ce97f1664ce2d8cac5ff76b4f%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="500" height="320" frameborder="0" scrolling="no" ></iframe>
		  </div>

		
			<div class="p-user-mypage__events" >
				<tr>
					<td class="p-user3-mypage__events1"><label for="introduction" class="form-label"></label>
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
					<div class="p-mypage-store__click">
						<a href="#">もっと見る...Click here</a></div>
				</tr>
				</div>
		</div>
	</div>
	<div class="p-user-mypage__right">
		<form action="/event015" method="post" enctype="multipart/form-data">
            <div class="eventadd__content">
                {{-- < class="eventadd__left"> --}}
                    <div class="eventadd__img-container">
                        {{--  デフォルト画像noimage  --}}
                        <div id="default_image">
                            <img src="img/noimage.jpg" class="e-imagePreview" alt="写真がありません" width="200px" height="200px">
                        </div>
		<a href="#"><button class="p-user-mypage__btn"> DM送信</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォローする</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
		<a href="#"><button class="p-user-mypage__btn"> ブログを読む</button></a>
		<a href="#"><button class="p-user-mypage__btn--red"> 通報する</button></a>
		
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


