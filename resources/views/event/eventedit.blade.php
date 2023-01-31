@extends('layouts.layout')

@section('title')
    イベント募集編集・削除
@endsection

@section('main')
    <div class="eventadd-container">
        {{-- 左側のメニューバー --}}
        @component('components.left', ['categories' => $categories])
        @endcomponent
        {{-- 右側のイベント欄 --}}
        <section class="eventadd p-event-right-content">

            <div class="alert c-bgcolor--beige c-text-lg c-color" role="alert">
            イベント募集編集・削除
            </div>
            {{--  form ここから ファイルアップロードはenctype="multipart/form-data"が必要 --}}
            <form action="?" method="post" enctype="multipart/form-data">
                @csrf
            <div class="eventadd__content">
                <div class="eventadd__left">
                    <div class="eventadd__img-container">
                        {{--  DBから画像を読み込み  --}}
                        <div id="default_image">
                            <img src="{{asset('/storage/eimg/'.$event->event_image)}}" class="e-imagePreview" alt="イベント写真">
                        </div>
                        {{-- jsでinput=fileの画像プレビュー https://www.kabanoki.net/1552/  --}}
                        {{-- ファイルをアップロードするボタンBootstrap https://qiita.com/zoonaka/items/46d44793827920282f75  --}}
                        <div id="preview" class="e-imagePreview"></div>
                        <div class="btn-wrap">
                            <label>
                                <span class="btn btn-warning p-event-text c-text-sm">登録
                                <input type="file" name="event_image" onChange="imgPreView(event)" style="display:none" accept="image/png, image/jpeg">
                                </span>
                                <button type="button" id="delete" class="btn btn-warning p-event-text c-text-sm">削除</button>
                                {{--  <input type="submit" value="削除" class="btn btn-warning p-event-text c-text-sm">  --}}
                            </label>
                        </div>
                    </div>

                    {{--  左下の更新ボタン  --}}
                    <div class="eventadd__btn-container">
                        <input type="submit" value="更新" name="edit" class='button' formaction="{{ url('event016/'.$event->id) }}">

                    
                    <div class="c-color--black">
        {{--  確認モーダルを挿入  --}}
            {{--   ボタンの設定   --}}
            <button type="button" class="btn btn-warning p-event-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
            削除
            </button>
            {{--  モーダルの設定  --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                {{--  bgcolorはmodal-contentに設定する  --}}
                <div class="modal-content"> 
                    <div class="modal-header">
                        {{--  タイトル  --}}
                        <h1 class="fs-5" id="exampleModalLabel">イベント投稿削除</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
                    </div>
                    <div class="modal-body">
                        <p>投稿を削除しますか？</p>
                    </div>
                    <div class="modal-footer">
                        {{--  <form action="?" method="post">  --}}
                            {{--  <input type="hidden" name="id" value="{{$event->id}}">  --}}
                            {{--  <input type="hidden" name="id" value="">  --}}
                            <button type="submit" class="btn c-bgcolor--navy c-color--white" formaction="{{ url('eventdel/'.$event->id) }}">はい</button>
                        {{--  </form>  --}}
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">いいえ</button>
                    </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

                    </div>
                    </div>
                </div>
                <div class="eventadd__right">
                    <table class="eventadd__table">
                        <tbody>
                            @csrf
                            {{--  イベントタイトル入力欄  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">イベントタイトル</label>
                                    @error('event_title')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                    <input type="text" name="event_title" value="{{$event->event_title}}" class="form-control" placeholder="イベントタイトル">
                                    <div class="form-text" ></div>
                                </td>
                            </tr>
                            {{--  カテゴリを選択  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">場所（市町村名）</label>
                                    @error('category_id')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                    {{--  <input type="text" name="city" value="{{$event->area->city}}" class="form-control" placeholder="場所（市町村名）">  --}}
                                    <select name="category_id" class="form-select" aria-label="Default select example">
                                        <option disabled selected>{{$event->category->category_name}}</option>
                                        @foreach ($categories as $item)
                                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <div id="emailHelp" class="form-text" ></div> 
                                </td>
                            </tr>
                            {{--  開催場所を選択  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">イベント開催地</label>
                                    @error('city')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                    {{--  <input type="text" name="city" value="{{$event->area->city}}" class="form-control" placeholder="場所（市町村名）">  --}}
                                    <select name="city" class="form-select" aria-label="Default select example">
                                        <option disabled selected>{{$event->area->city}}</option>
                                        @foreach ($items as $item)
                                        <option value="{{$item->id}}">{{$item->city}}</option>
                                        @endforeach
                                    </select>
                                    <div id="emailHelp" class="form-text" ></div>
                                </td>
                            </tr>
                            {{--  開催日時を選択  --}}
                            <tr>
                                <td colspan="2">
                                    <label for="exampleInputEmail1" class="form-label">開催日時</label>
                                    @error('date_of_event')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                    <input type="datetime-local" name="date_of_event" value="{{$event->date_of_event}}" class="form-control" placeholder="開催日時">
                                    <div id="emailHelp" class="form-text" ></div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            {{--  終了日時を選択  --}}
                            <tr>
                                <td colspan="2">
                                    <label for="exampleInputEmail1" class="form-label">終了日時</label>
                                    @error('end_time')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                    <input type="datetime-local" name="end_time" value="{{$event->end_time}}" class="form-control" placeholder="終了日時">
                                    <div id="emailHelp" class="form-text" >
                                </td>
                                <td>
                                </td>
                            </tr>
                            {{--  URL入力欄  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">URL</label>
                                    <input type="url" name="url" value="{{$event->url}}" class="form-control" placeholder="URL">
                                    <div id="emailHelp" class="form-text" >
                                </td>
                            </tr>
                            {{--  イベント内容詳細入力欄  --}}
                            <tr>
                                <td colspan="3">
                                <div class="mb-3"> 
                                    <label for="exampleFormControlTextarea1" class="form-label">イベント内容</label>
                                    @error('event_detail')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                    <textarea class="form-control" name="event_detail" placeholder="イベント内容" style="height: 10em">{{$event->event_detail}}</textarea>
                                
                                </div> 
                                </td>
                            </tr>
                            <input type="hidden" name="id" value="{{$event->id}}">
                        </tbody>
                    </table>
                </div>
            </div>
            </form>
        </section>
    </div>
    {{--  https://www.kabanoki.net/1552/  --}}
    <script>
        function imgPreView(event){
            var file = event.target.files[0];
            var reader = new FileReader();
            var preview = document.getElementById("preview");
            var previewImage = document.getElementById("previewImage");
            
            if(previewImage != null) //画像があれば
              preview.removeChild(previewImage);
              // default_image を非表示
              var elem = document.getElementById("default_image");
              elem.style.display = "none";
              
            reader.onload = function(event) {
               var img = document.createElement("img");
               img.setAttribute("src", reader.result);
               img.setAttribute("id", "previewImage");
               preview.appendChild(img); 
            };
            reader.readAsDataURL(file);
        }    
    </script>


{{--  bootstrap.js をCDNから読み込む  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

@endsection