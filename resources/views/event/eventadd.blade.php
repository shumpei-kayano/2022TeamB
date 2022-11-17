@extends('layouts.layout')

@section('title')
    イベント募集新規作成
@endsection

@section('main')
    <div class="eventadd-container">
        {{-- 左側のメニューバー --}}
        @component('components.left')
        @endcomponent
        {{-- 右側のイベント欄 --}}
        <section class="eventadd p-event-right-content">
            <h2 class="eventadd__title">イベント募集新規作成</h2>
            <form action="/event015" method="post">
            <div class="eventadd__content">
                <div class="eventadd__left ">
                    <div class="eventadd__img-container">
                        <img src="img/noimage.jpg" class="card-img-top" alt="...">
                        {{--  <input type="file" id="image_uploads" name="image_uploads" accept="image/png, image/jpeg">  --}}
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
                            @csrf
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">イベントタイトル</label>
                                    <input type="text" name="event_title" value="{{old('event_title')}}" class="form-control" placeholder="イベントタイトル">
                                    <div class="form-text" ></div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">場所（市町村名）</label>
                                    <select name="city" class="form-select" aria-label="Default select example">
                                        <option disabled selected>開催場所を選択</option>
                                        @foreach ($items as $item)
                                        <option value="{{$item->id}}">{{$item->city}}</option>
                                        @endforeach
                                    </select>
                                    <div id="emailHelp" class="form-text" ></div>
                                    {{--  <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="場所">  --}}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label for="exampleInputEmail1" class="form-label">開催日</label>
                                    <input type="datetime-local" name="date_of_event" value="{{old('date_of_event')}}" class="form-control" placeholder="開催日">
                                    <div id="emailHelp" class="form-text" ></div>
                                </td>
                                <td>
                                    {{--  <label for="exampleInputEmail1" class="form-label">開始時間</label>
                                    <input type="time" name="date_of_event" value="{{old('date_of_event')}}" class="form-control" placeholder="開始時間">
                                    <div id="emailHelp" class="form-text" >  --}}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label for="exampleInputEmail1" class="form-label">終了日</label>
                                    <input type="datetime-local" name="end_time" value="{{old('end_time')}}" class="form-control" placeholder="終了日">
                                    <div id="emailHelp" class="form-text" >
                                </td>
                                <td>
                                    {{--  <label for="exampleInputEmail1" class="form-label">終了時間</label>
                                    <input type="time" name="end_time" value="{{old('end_time')}}" class="form-control" placeholder="終了時間">
                                    <div id="emailHelp" class="form-text" >  --}}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">URL</label>
                                    <input type="url" name="url" value="{{old('url')}}" class="form-control" placeholder="URL">
                                    <div id="emailHelp" class="form-text" >
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3">
                                <div class="mb-3"> 
                                    <label for="exampleFormControlTextarea1" class="form-label">イベント内容</label>
                                    <textarea class="form-control" name="event_detail" value="{{old('event_detail')}}" placeholder="イベント内容" rows="3"></textarea> 
                                </div> 
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            <div>
            </form>
        </section>
    </div>
    </div>
@endsection