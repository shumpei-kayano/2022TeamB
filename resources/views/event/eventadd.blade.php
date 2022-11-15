@extends('layouts.layout')

@section('title')
    イベント募集投稿一覧
@endsection

@section('main')
    <div class="eventadd-container">
        {{-- 左側のメニューバー --}}
        @component('components.left')@endcomponent
        {{-- 右側のイベント欄 --}}
        <section class="eventadd p-event-right-content">
            <h2 class="eventadd__title">新着順　イベント募集投稿</h2>
            <div class="eventadd__content">
                <div class="eventadd__left ">
                    <div class="eventadd__img-container">
                        <img src="img/noimage.jpg" class="card-img-top" alt="...">
                        <input type="submit" value="登録" class='button'>
                        <input type="submit" value="削除" class='button'>
                    </div>
                    <div class="eventadd__btn-container">
                        <input type="submit" value="保存" class='button'>
                        <input type="submit" value="公開" class='button'>
                    </div>
                </div>
                <div class="eventadd__right">
                    <table class="eventadd__table">
                        <tbody>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="(必須)イベントタイトル">
                                    <div id="emailHelp" class="form-text" ></div></td>
                            </tr>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="場所">
                                    <div id="emailHelp" class="form-text" ></div></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="（必須）開始　2022/02/22">
                                    <div id="emailHelp" class="form-text" ></div></td>
                                <td><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="開始時間">
                                    <div id="emailHelp" class="form-text" ></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="（必須）終了　2022/02/22">
                                    <div id="emailHelp" class="form-text" ></td>
                                <td><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="終了時間">
                                    <div id="emailHelp" class="form-text" ></td>
                            </tr>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="関連URL お申し込みはこちら">
                                    <div id="emailHelp" class="form-text" ></td>
                            </tr>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="イベント内容記述">
                                    <div id="emailHelp" class="form-text" ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div>
        </section>
    </div>
    </div>
@endsection