@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')
<div class="p-events-detail">
	<div class="p-events-detail__left">
        <table>
            <tbody>
                <tr>
                    <td class="p-events-title"><label for="title" class="form-label"></label>
                        <input type="text" class="form-control" id="title" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td class="p-events-place"><label for="place" class="form-label"></label>
                        <input type="text" class="form-control" id="place" placeholder="場所">
                    </td>
                </tr>
                <tr>
                    <td class="p-events-start"><label for="start" class="form-label"></label>
                        <input type="text" class="form-control" id="start" placeholder="開始日">
                    </td>
                    <td class="p-events-s_time"><label for="s_time" class="form-label"></label>
                        <input type="text" class="form-control" id="s_time" placeholder="開始：:時間">
                    </td>
                </tr>
                <tr>
                    <td class="p-events-end"><label for="end" class="form-label"></label>
                        <input type="text" class="form-control" id="end" placeholder="終了日">
                    </td>
                    <td class="p-events-e_time"><label for="e_time" class="form-label"></label>
                        <input type="text" class="form-control" id="e_time" placeholder="終了：時間">
                    </td>
                </tr>
                <tr>
                    <td class="p-events-URL"><label for="URL" class="form-label"></label>
                        <input type="text" class="form-control" id="URL" placeholder="https//...">
                    </td>
                </tr>
                <tr>
                    <td class="p-events-description"><label for="description" class="form-label"></label>
                        <input type="text" class="form-control" id="description" placeholder="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="p-user-mypage__right">
		<img src="{{ asset('/img/noimage.png') }}" width="200px" height="200px">
		<a href="#"><button class="p-user-mypage__btn"> DM送信</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォローする</button></a>
		<a href="#"><button class="p-user-mypage__btn"> フォロワー</button></a>
		<a href="#"><button class="p-user-mypage__btn"> ブログを読む</button></a>
		<a href="#"><button class="p-user-mypage__btn--red"> 通報する</button></a>
	</div>
</div>
@endsection