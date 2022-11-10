@extends('layouts.layout')

@section('title')
    イベント募集投稿一覧
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row">

      {{-- 左メニュー(2)コンポーネント読み込み --}}
      @component('components.left')
      @endcomponent

      {{-- 右全体(10) --}}
      <div class="col-10">

        {{-- 右のコンテンツrow(12) --}}
        <div class="row align-items-center">
          {{--  ページタイトル(8)  --}}
          <div class="col-8">
              <div class="alert alert-warning" role="alert">
                新着順 イベント募集投稿</div>
          </div>
          {{--  新規募集投稿ボタン(4)  --}}
          <div class="col-4">
            <button type="button" class="btn btn-outline-warning">イベントの募集投稿をする</button>
          </div>
        </div>

        {{--  カードを表示row  --}}
        <div class="row">

          @foreach ($items as $item)
            <div class="card" style="width: 13rem;">
              <a href="#">
                <img src="img/noimage.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->getTitle()}}</h5>
                  <p class="card-text">{{$item->getDate()}}</p>
                </div>
              </a>
            </div>
          @endforeach

        </div>

        {{-- 右下のコンテンツrow(12) --}}

        <div class="row">
          <div class="col-8"></div>
          <div class="col-4">
         {{ $items->links() }}
          </div>
        </div>

        {{--  テキストエリア例  --}}
        {{--  <div class="mb-3"> 
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> 
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>       
        </div>   --}}

      </div>
    </div>
  </div>
@endsection



<style>
  .row {
    background-color: #87785A;
    display: flex;
    justify-content: center;
  }
  .col-10 {
    padding: 20px 20px;
  }
  .card {
    margin: 10px 10px;
  }

  a {
    color: #04047B;
  }
</style>