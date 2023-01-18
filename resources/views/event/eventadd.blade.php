@extends('layouts.layout')

@section('title')
    イベント募集新規作成
@endsection

@section('main')
    <div class="eventadd-container">
        {{-- 左側のメニューバー --}}
        {{--  @component('components.left')
        @endcomponent  --}}
        <div class="col-2 c-bgcolor--brown left-bar Category_bar">
            <div class="w-100 d-flex justify-content-center">
              <div class="p-left_menu_bar">
                カテゴリから検索
              </div>
            </div><br>
            @foreach ($categories as $item)
            <p><a href="{{ url('categorysearch/'.$item->id) }}">{{$item->category_name}}</a></p>
            @endforeach
        </div>        
        {{-- 右側のイベント欄 --}}
        <section class="eventadd p-event-right-content">
        <div class="alert c-bgcolor--beige c-text-lg c-color" role="alert">
        イベント募集新規作成</div>
            {{--  <h2 class="eventadd__title">イベント募集新規作成</h2>  --}}
            {{--  form ここから ファイルアップロードはenctype="multipart/form-data"が必要 --}}
            <form action="/event015" method="post" enctype="multipart/form-data">
            <div class="eventadd__content">
                <div class="eventadd__left">
                    <div class="eventadd__img-container">
                        {{--  デフォルト画像noimage  --}}
                        <div id="default_image">
                            <img src="img/noimage.jpg" class="e-imagePreview" alt="写真がありません">
                        </div>
                        {{-- jsでinput=fileの画像プレビュー https://www.kabanoki.net/1552/  --}}
                        <div id="preview" class="e-imagePreview"></div>
                        <div class="btn-wrap">
                            <label>
                                <span class="btn eventadd-btn-warning p-event-text c-text-sm">登録
                                <input type="file" name="event_image" onChange="imgPreView(event)" style="display:none" accept="image/png, image/jpeg">
                                </span
                                <button type="button" id="delete" class="btn eventadd-btn-warning p-event-text c-text-sm">削除</button>
                            </label>
                        </div>
                        {{-- ファイルをアップロードするボタンBootstrap https://qiita.com/zoonaka/items/46d44793827920282f75  --}}                       
                    </div>
                    <div class="eventadd__btn-container">
                        <input type="submit" value="保存" name="save" class='button'>
                        <input type="submit" value="公開" name="open" class='button'>
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
                                    <input type="text" name="event_title" value="{{old('event_title')}}" class="form-control" placeholder="イベントタイトル">
                                    <div class="form-text" ></div>
                                </td>
                            </tr>
                            {{--  カテゴリを選択  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">カテゴリ</label>
                                    @error('category_id')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                    <select name="category_id" class="form-select" aria-label="Default select example">
                                        <option disabled selected>カテゴリを選択</option>
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
                                    <select name="city" class="form-select" aria-label="Default select example">
                                        <option disabled selected>開催地を選択</option>
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
                                    <input type="datetime-local" name="date_of_event" value="{{old('date_of_event')}}" class="form-control" placeholder="開催日時">
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
                                    <input type="datetime-local" name="end_time" value="{{old('end_time')}}" class="form-control" placeholder="終了日時">
                                    <div id="emailHelp" class="form-text">
                                </td>
                                <td>
                                </td>
                            </tr>
                            {{--  URL入力欄  --}}
                            <tr>
                                <td colspan="3">
                                    <label for="exampleInputEmail1" class="form-label">URL</label>
                                    <input type="url" name="url" value="{{old('url')}}" class="form-control" placeholder="URL">
                                    <div id="emailHelp" class="form-text"></div>
                                </td>
                            </tr>
                            {{--  イベント内容詳細入力欄  --}}
                            <tr>
                                <td colspan="3">
                                <div class="mb-3"> 
                                    <label for="exampleFormControlTextarea1" class="form-label">イベント内容</label>
                                    @error('event_detail')<span class="badge bg-danger">必須</span>{{$message}}@enderror
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