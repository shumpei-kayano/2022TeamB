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
                <div class="eventadd__left">
                    <div class="eventadd__img-container">
                        {{--  デフォルト画像noimage  --}}
                        <div id="default_image">
                            <img src="img/noimage.jpg" class="e-imagePreview" alt="default_image">
                        </div>
                        {{-- jsでinput=fileの画像プレビュー https://www.kabanoki.net/1552/  --}}
                        <div id="preview" class="e-imagePreview"></div>
                        <div class="btn-wrap">
                            <label>
                                <span class="btn btn-warning p-event-text c-text-sm">登録
                                <input type="file" name="event_image" onChange="imgPreView(event)" style="display:none" accept="image/png, image/jpeg">
                                </span>
                                <input type="submit" value="削除" class="btn btn-warning p-event-text c-text-sm">
                            </label>
                        </div>
{{--  <div class="e-imagePreview"><img src="e-img/{{$eitems->event_image}}" class="card-img-top" alt="..."></div>  --}}

                        {{-- ファイルをアップロードするボタンBootstrap https://qiita.com/zoonaka/items/46d44793827920282f75  --}}
                                               
                        {{--  最初の状態  --}}
                        {{--  <input type="submit" value="登録" class='button'>
                        <input type="submit" value="削除" class='button'>  --}}
                        
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
                            {{--  イベントタイトル入力欄  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">イベントタイトル</label>
                                    <input type="text" name="event_title" value="{{old('event_title')}}" class="form-control" placeholder="イベントタイトル">
                                    <div class="form-text" ></div>
                                </td>
                            </tr>
                            {{--  開催場所を選択  --}}
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
                                    
                                </td>
                            </tr>
                            {{--  開催日時を選択  --}}
                            <tr>
                                <td colspan="2">
                                    <label for="exampleInputEmail1" class="form-label">開催日時</label>
                                    <input type="datetime-local" name="date_of_event" value="{{old('date_of_event')}}" class="form-control" placeholder="開催日時">
                                    <div id="emailHelp" class="form-text" ></div>
                                </td>
                                <td>
                                    {{--  <label for="exampleInputEmail1" class="form-label">開始時間</label>
                                    <input type="time" name="date_of_event" value="{{old('date_of_event')}}" class="form-control" placeholder="開始時間">
                                    <div id="emailHelp" class="form-text" >  --}}
                                </td>
                            </tr>
                            {{--  終了日時を選択  --}}
                            <tr>
                                <td colspan="2">
                                    <label for="exampleInputEmail1" class="form-label">終了日時</label>
                                    <input type="datetime-local" name="end_time" value="{{old('end_time')}}" class="form-control" placeholder="終了日時">
                                    <div id="emailHelp" class="form-text" >
                                </td>
                                <td>
                                    {{--  <label for="exampleInputEmail1" class="form-label">終了時間</label>
                                    <input type="time" name="end_time" value="{{old('end_time')}}" class="form-control" placeholder="終了時間">
                                    <div id="emailHelp" class="form-text" >  --}}
                                </td>
                            </tr>
                            {{--  URL入力欄  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">URL</label>
                                    <input type="url" name="url" value="{{old('url')}}" class="form-control" placeholder="URL">
                                    <div id="emailHelp" class="form-text" >
                                </td>
                            </tr>
                            {{--  イベント内容詳細入力欄  --}}
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

@endsection