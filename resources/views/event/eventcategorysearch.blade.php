@extends('layouts.layout')

@section('title')
    イベント募集投稿一覧
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row">

      {{-- 左メニュー(2)コンポーネント読み込み --}}
      @component('components.left', ['categories' => $categories])
      @endcomponent

      {{-- 右全体(10) --}}
      <div class="col-10 p-event-right-content">

        {{-- 右のコンテンツrow(12) --}}
        <div class="row align-items-center">
          {{--  ページタイトル(8)  --}}
          <div class="col-8">
              <div class="alert c-bgcolor--beige c-text-lg c-color" role="alert">
                新着順 イベント募集投稿 {{$id}}
              </div>
          </div>
          {{--  新規募集投稿ボタン(4)  --}}
          <div class="col-4">
            <a class="btn btn-warning p-event-text c-text-sm eventichirankojin-btn-warning" href="{{asset('event015')}}" role="button">イベントの募集投稿をする</a>
            {{--  <button type="button" class="btn btn-warning p-event-text c-text-sm">イベントの募集投稿をする</button>  --}}
          </div>
        </div>

        {{--  カードを表示row  --}}
        <div class="row p-eventcards">
        {{--  https://qiita.com/YasuhaF/items/9a897e83afe1819d97af 画像を表示 --}}
          @foreach ($items as $item)
            <div class="card p-eventcards__card" style="width: 22%;">
              <a href="{{asset('event014/'.$item->id)}}">
                <img src="{{asset('/storage/eimg/'.$item->event_image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->event_title}}</h5>
                  <p class="card-text">{{$item->date_of_event->format('Y-m-d')}}</p>
                </div>
              </a>
            </div>
          @endforeach

        </div>

        {{-- 右下のコンテンツrow(12) --}}

        <div class="row p-event-right-content">
          <div class="col-8"></div>
          <div class="col-4">
         {{ $items->links() }}
          </div>
        </div>
        
        {{--  componentsから確認モーダルを挿入  --}}
        {{--  @component('components.confirmmodal') 
          @slot('btn_title')
            削除
          @endslot
          @slot('msg_title')
            イベント投稿削除
          @endslot
          @slot('modal_body')
            本当に削除しますか？
          @endslot
        @endcomponent  --}}

      </div>
    </div>
  </div>
@endsection
