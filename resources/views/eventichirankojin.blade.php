@extends('layouts.layout')

@section('title')
    イベント募集投稿一覧
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row">
      {{-- 左メニューバー --}}

      @component('components.left')
      @endcomponent


      {{-- 右側 --}}
      <div class="col-10">

        {{-- 右のコンテンツ --}}
        <div class="row">
          <div class="col-8">
            {{--  ページタイトル  --}}
            <p class="title">新着順 イベント募集投稿</p>
          </div>
          <div class="col-4">
            <button type="button" class="btn btn-outline-warning">イベントの募集をする</button>
          </div>
        </div>

        <div class="row">

        @foreach ($items as $item)
          <div class="card" style="width: 13rem;">
            <img src="img/noimage.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item->getTitle()}}</h5>
              <p class="card-text">{{$item->getDate()}}</p>
              <a href="#" class="btn btn-secondary">詳細</a>
            </div>
          </div>
        @endforeach


        </div>

        {{-- 右下のコンテンツ --}}
        <div class="row">
          <div class="col-8"></div>
          <div class="col-4">
            <button type="button" class="btn btn-outline-warning">もっと見る click here</button>
          </div>
        </div>
        {{--  ページネーション{{ $items->links() }}  --}}
      </div>

    </div>
  </div>
@endsection



<style>
  .col-2 {
    background-color: #ddd;

  }

  .col-10 {
    background-color: #ddd;
    max-width: 850px;

  }

  .row {
    background-color: #f6f6f6;
    display: flex;
    justify-content: center;
  }

  .title {
    color: #333;
    font-size: 1.5em;
  }

  .card {
    margin: 10px 10px;
  }
</style>