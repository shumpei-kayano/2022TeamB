{{-- オープンチャット新規作成画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット新規作成
@endsection

@section('main')

@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="p-large_bg">
    <div class="p-large_bg__card_bg">   {{-- チャット関連の背景色 --}}
    <div class="p-new_create_block">
        <form>
        <a class="p-large_bg__logo_img" href="{{URL::to('terms_of_service')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="40px"></a>
        </form>
        <h3>オープンチャット作成</h3>

        <input type="file" id="fopen" style="display:none;">
        <a href="Javascript:document.getElementById('fopen').click();">
            <img src="{{ asset('/img/circle_camera.png') }}" alt="" width="100px" height="100px">
        </a>

        <form action="create_new_open" method="POST">  {{--  データベースに格納するよよ --}}
            @csrf
        <div class="p-new_create_block__camera">
        <img src="{{ asset('/img/circle_camera.png') }}" alt="" width="100px" height="100px">
        </div>
        <div class="p-new_create_block__container" style="margin: 0 auto;">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="オープンチャット名を入力" name="title">
        </div>
{{-- 
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="オープンチャット名を入力" name="developer_id">
        </div> --}}

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="room_detail"></textarea>
            <label for="floatingTextarea2" style="color: rgb(101, 100, 100);">説明</label>
          </div>
        <br>
        <select class="form-select" aria-label="Default select example">
        <option selected>【プルダウンでカテゴリを選択】</option>
        <option value="1">悩み相談</option>
        <option value="2">友達づくり</option>
        <option value="3">困りごとはありませんか？</option>
        </select><br>
        </div>
        <form action="open_chat_preview">
            <input class="p-large_bg__check_btn" type="submit" value="プレビュー">
        </form>
        

        <div align="center">@foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach</div></form>
       
            
       
    </div>
</div>

<form action="open_chat_preview" method="POST">
    @csrf
    <input type="text" name="msg">
    <input type="submit" value="あああ">

</form>

@endsection