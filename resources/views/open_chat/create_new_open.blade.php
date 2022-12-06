{{-- オープンチャット新規作成画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット新規作成
@endsection

@section('main')

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
       {{--  <img src="{{ asset('/img/circle_camera.png') }}" alt="" width="100px" height="100px"> --}}
        </div>
        <div class="p-new_create_block__container" style="margin: 0 auto;">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="オープンチャット名を入力" name="title" value="{{ old('title') }}">
            @if($errors->has('title'))
            <p style="color:rgb(187, 0, 0)">✤オープンチャット名を入力をしてください</p>
            @endif
        </div>
{{-- 
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="オープンチャット名を入力" name="developer_id">
        </div> --}}

        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="room_detail">{{ old('room_detail') }}</textarea>
            <label for="floatingTextarea2" style="color: rgb(101, 100, 100);">説明（１０００文字以内）</label>
            @if($errors->has('room_detail'))
            <p style="color:rgb(187, 0, 0)">✤１０００文字以内で入力してください</p>
            @endif
          </div>
        <br>
        {{-- <select class="form-select" aria-label="Default select example">
        <option selected>【プルダウンでカテゴリを選択】</option>
        <option value="1">悩み相談</option>
        <option value="2">友達づくり</option>
        <option value="3">困りごとはありませんか？</option>
        </select><br> --}}

        <select class="form-select" aria-label="Default select example" name="category">
            <option value="" disabled selected style="display:none;">【プルダウンでカテゴリを選択】</option>
            @foreach ($items as $item)
                <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
            @endforeach
        </select>
        @if($errors->has('category'))
        <p style="color:rgb(187, 0, 0)">✤カテゴリーを選択してください</p>
        @endif
        <br>

        <form action="open_chat_preview">
            <input class="p-large_bg__check_btn" type="submit" value="プレビュー">
        </form>
</form>
       
            
       
    </div>
</div>

<form action="open_chat_preview" method="POST">
    @csrf
    <input type="text" name="msg">
    <input type="submit" value="あああ">

</form>

@endsection

<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;;LG0Gf;;;;;;;;;;;;;ifG0Gf;;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;t@@@@@0fi;;;;;;;;iL0@@@@@t;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;f@@@@@@@8Ctiii1tC8@@@@@@@t;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;f@@@@@@@@@@8888@@@@@@@@@@t;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;f@@@@@@@@@@@@@@@@@@@@@@@@t;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;C@@@@@@@@@@@@@@@@@@@@@@@@L;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;t8@@800@@@@@@@@@@@@@@008@@81;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;t8@@@G1t0@@88888888@@0t10@@@01;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;i8@@@@@8GCfttLG00GLttfCG8@@@@@0i;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;L@@@@@0fii;;t8@@@@81;;iif0@@@@@L;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;tLfG@81;iiiii1fLLf1iiiii;t8@@@@C;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;tCf1t0GtfLLi;i;;;i1fCCfii;;;;if@@@@@C;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;itfLG0GGGCLLLCC11ffLC8@@@@8CLfLCG@@@@@@f;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;iGGfLLCCCGG00C10C10@@@800008@@@@@@@@@@@@t;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;i0Ci0@@@@@@@@81L81L8Ct1iiii1tC8@@@@@@@@@f;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;L81L0GGCCLffffGG1f1i;;iiii;;it0@@@@@@@@8t;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;iCCL11LG0GCftLLLGf;iiiiiiiiii;L@@@@@@@@@@0Ct;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;i1iC@@@@@81f8@@Ci;iiiiiiii;iG@@@@8@@@@@@@@0i;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;1LGGGL1;L@@@@Gtii;;;;iitG@@@@f10@8LLCG0Ci;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;;;C@@@@@@0GCLLCG0@@@@@@L;if1;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;if0@@@@@@@@@8fL8@@@@@@@@@Gf;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;C@@@@@@@@@@@0;i8@@@@@@@@@@@L;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;ifLCCCCCCCCL1;;tLCCCCCCCCLfi;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->
<!--;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;-->

