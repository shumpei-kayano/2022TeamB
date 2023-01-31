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
            <div class=""> 
                <div class="eventadd-parent alert c-bgcolor--beige c-text-lg c-color" role="alert">
                    <span class="eventadd-title">イベント詳細</span>
                    <div class="obj-cover"><img src="{{asset('/storage/eimg/'.$user->icon)}}" class="" alt="..." width="100%" height="100%"></div>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>                </svg> --}}
                </div>
            </div>

            {{--  <h1 class="eventadd__title">イベント詳細</h1>  --}}
            <div class="eventadd__content">
                {{--  イベント画像表示  --}}
                <div class="eventadd__left ">
                    <div class="eventadd__img-container e-imagePreview">  
                        <img src="{{asset('/storage/eimg/'.$item->event_image)}}" class="card-img-top" alt="...">
                    </div>
                    {{--  左下の参加ボタン  --}}
                    <form action="{{ url('event014/'.$item->id) }}" method="post">
                    <div class="eventadd__btn-container">
                        @csrf
                        @if ($user->id != $item->user_id && $user->id != $guests->user_id)
                        <input type="submit" value="参加する" class='button' name="join">
                        @elseif ($user->id != $item->user_id && $user->id == $guests->user_id)
                        <input type="submit" value="参加辞退する" class='button' name="cancel">
                        {{--  @elseif ($user->id != $guests->user_id)  --}}
                        @endif
                    </div>
                    </form>
                </div>
                {{--  右の詳細表示  --}}
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
                                イベント開催地
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
                                {{ substr($item->date_of_event,0,10)}}
                                @endslot
                                @endcomponent
                                </td>
                                
                                <td colspan="1">
                                @component('components.framelikeinput')
                                @slot('title')
                                開始時間
                                @endslot
                                @slot('content')
                                {{ substr($item->date_of_event,11,5) }}
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
                                {{ substr($item->end_time,0,10) }}
                                @endslot
                                @endcomponent
                                </td>
                                
                                <td colspan="1">
                                    @component('components.framelikeinput')
                                    @slot('title')
                                    終了時間
                                    @endslot
                                    @slot('content')
                                    {{ substr($item->end_time,11,5) }}
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