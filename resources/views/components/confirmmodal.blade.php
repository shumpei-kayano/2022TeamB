{{--   ボタンの設定   --}}
<button type="button" class="btn btn-warning p-event-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
    {{$btn_title}}
</button>

{{--  モーダルの設定  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
    {{--  bgcolorはmodal-contentに設定する  --}}
    <div class="modal-content"> 
        <div class="modal-header">
            {{--  タイトル  --}}
            <h1 class="fs-5" id="exampleModalLabel">{{$msg_title}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
        </div>
        <div class="modal-body">
            <p>{{$modal_body}}</p>
        </div>
        <div class="modal-footer">
            {{--  <form action="?" method="post">  --}}
                {{--  コンポーネントだと削除POSTがうまくできない  --}}
                {{--  <input type="hidden" name="id" value="">  --}}
                <button type="submit" class="btn c-bgcolor--navy c-color--white" formaction="">はい</button>
            {{--  </form>  --}}
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">いいえ</button>
        </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{--  bootstrap.js をCDNから読み込む  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

{{--  componentsから確認モーダルを挿入、以下のコードを使う側に入れる  --}}
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