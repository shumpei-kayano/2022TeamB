@extends('layouts.layout')

@section('title')
    イベント詳細
@endsection

@section('main')
    <div class="eventadd-container">
        {{-- 左側のメニューバー --}}
        @component('components.left', ['categories' => $categories])
        @endcomponent
        {{-- 右側のイベント欄 --}}
        <section class="eventadd p-event-right-content">
            <div class="alert c-bgcolor--beige c-text-lg c-color" role="alert">イベント詳細</div>
            {{--  <h1 class="eventadd__title">イベント詳細</h1>  --}}
            <div class="eventadd__content">
                <div class="eventadd__left ">
                    <div class="eventadd__img-container e-imagePreview">  
                        <img src="{{asset('/storage/eimg/'.$item->event_image)}}" class="card-img-top" alt="...">
                        {{--  <input type="submit" value="登録" class='button'>
                        <input type="submit" value="削除" class='button'>  --}}
                    </div>
                    <div class="eventadd__btn-container">
                        <input type="submit" value="参加する" class='button'>
                        <input type="submit" value="参加辞退する" class='button'>
                    </div>
                </div>
                <div class="eventadd__right">
                    <table class="eventadd__table">
                        <tbody>
                            <tr>
                                <td colspan="3">
                                @component('components.framelikeinput')
                                @slot('title')
                                タイトル
                                @endslot
                                @slot('content')
                                {{$item->event_title}}
                                @endslot
                                @endcomponent
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                @component('components.framelikeinput')
                                @slot('title')
                                カテゴリ
                                @endslot
                                @slot('content')
                                {{$item->category->category_name}}
                                @endslot
                                @endcomponent
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                @component('components.framelikeinput')
                                @slot('title')
                                場所（市町村名）
                                @endslot
                                @slot('content')
                                {{$item->area->city}}
                                @endslot
                                @endcomponent
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                @component('components.framelikeinput')
                                @slot('title')
                                開始日
                                @endslot
                                @slot('content')
                                {{$item->date_of_event->format('Y-m-d')}}
                                @endslot
                                @endcomponent
                                </td>
                                
                                <td colspan="1">
                                @component('components.framelikeinput')
                                @slot('title')
                                開始時間
                                @endslot
                                @slot('content')
                                {{$item->date_of_event->format('H:i')}}
                                @endslot
                                @endcomponent
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                @component('components.framelikeinput')
                                @slot('title')
                                終了日
                                @endslot
                                @slot('content')
                                {{$item->end_time->format('Y-m-d')}}
                                @endslot
                                @endcomponent
                                </td>
                                
                                <td colspan="1">
                                    @component('components.framelikeinput')
                                    @slot('title')
                                    終了時間
                                    @endslot
                                    @slot('content')
                                    {{$item->end_time->format('H:i')}}
                                    @endslot
                                    @endcomponent
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    @component('components.framelikeinput')
                                    @slot('title')
                                    関連URL
                                    @endslot
                                    @slot('content')
                                    {{$item->url}}
                                    @endslot
                                    @endcomponent
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    {{--  @component('components.framelikeinput')
                                    @slot('title')
                                    イベント内容
                                    @endslot
                                    @slot('content')
                                    {{$item->event_detail}}
                                    @endslot
                                    @endcomponent  --}}
                                    <div class="display-box">
                                        <label for="exampleInputEmail1" class="form-label display-box__label">イベント内容</label>
                                        <div class="display-box__heightadjust">
                                        {{$item->event_detail}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div>
        </section>
    </div>
@endsection