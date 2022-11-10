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
      <div class="col-10 p-event-right-content">

        {{-- 右のコンテンツrow(12) --}}
        <div class="row align-items-center">
          {{--  ページタイトル(8)  --}}
          <div class="col-8">
              <div class="alert alert-warning event-text-lg" role="alert">
                新着順 イベント募集投稿</div>
          </div>
          {{--  新規募集投稿ボタン(4)  --}}
          <div class="col-4">
            <button type="button" class="btn btn-outline-warning event-text-sm">イベントの募集投稿をする</button>
          </div>
        </div>

        {{--  カードを表示row  --}}
        <div class="row p-eventcards">

          @foreach ($items as $item)
            <div class="card p-eventcards__card" style="width: 13rem;">
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

        <div class="row p-event-right-content">
          <div class="col-8"></div>
          <div class="col-4">
         {{ $items->links() }}
          </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Launch demo modal
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

<script>
  var myModal = document.getElementById('myModal')
  var myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
  })
</script>