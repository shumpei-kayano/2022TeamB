@extends('layouts.layout')

@section('title')
    イベント詳細
@endsection

@section('main')
    <div class="eventadd-container">
        {{-- 左側のメニューバー --}}
        @component('components.left')
        @endcomponent
        {{-- 右側のイベント欄 --}}
        <section class="eventadd p-event-right-content">
            <h2 class="eventadd__title">イベント詳細</h2>
            <div class="eventadd__content">
                <div class="eventadd__left ">
                    <div class="eventadd__img-container">  
                        <img src="{{asset('/storage/eimg/'.$item->event_image)}}" class="card-img-top" alt="...">
                        <input type="submit" value="登録" class='button'>
                        <input type="submit" value="削除" class='button'>
                    </div>
                    <div class="eventadd__btn-container">
                        <input type="submit" value="編集" class='button'>
                        <input type="submit" value="削除" class='button'>
                    </div>
                </div>
                <div class="eventadd__right">
                    <table class="eventadd__table">
                        <tbody>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label">タイトル:{{$item->event_title}}</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="タイトル:{{$item->event_title}}">
                                    <div id="emailHelp" class="form-text"></div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label">場所:{{$item->city->area}}</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="場所:{{$item->city}}">
                                    <div id="emailHelp" class="form-text" ></div></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="exampleInputEmail1" class="form-label">開始日:{{$item->date_of_event->format('Y-m-d')}}</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="開始日：{{$item->date_of_event->format('Y-m-d')}}">
                                    <div id="emailHelp" class="form-text" ></div></td>
                                <td><label for="exampleInputEmail1" class="form-label">開始時間:{{$item->date_of_event->format('H:i')}}</label>
                                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="開始時間:{{$item->date_of_event->format('H:i')}}">
                                    <div id="emailHelp" class="form-text" ></td>
                            </tr>
                            <tr>
                                <td colspan="2"><label for="exampleInputEmail1" class="form-label">終了日:{{$item->end_time->format('Y-m-d')}}</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="2022/02/22">
                                    <div id="emailHelp" class="form-text" ></td>
                                <td><label for="exampleInputEmail1" class="form-label">終了時間:{{$item->end_time->format('H:i')}}</label>
                                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="20:00">
                                    <div id="emailHelp" class="form-text" ></td>
                            </tr>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label">関連URL:{{$item->url}}</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="関連URL  https://www.yahoo.co.jp/">
                                    <div id="emailHelp" class="form-text" ></td>
                            </tr>
                            <tr>
                                <td colspan="3"><label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="2名から開催。大分駅ザビエル像前に17:45集合！！">
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