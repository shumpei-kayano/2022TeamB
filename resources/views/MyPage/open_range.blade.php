@extends('layouts.layout')

@section('title')

    トップ
@endsection

@section('main')    



<div class="p-login_bg">
    <div class="p-login_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <div class="p-open_range">
            <br><h3>公開範囲の設定</h3>
            <br><a href="#"><button class="p-open_range__b"><img src="./img/a.jpg" width="50" height="30" border="0"> 全体に公開</button></a>
            <br><a href="#"><button class="p-open_range__t"> フォロワーだけに公開</button></a>
            <br><a href="#"><button class="p-open_range__n"> <img src="./img/human.svg" width="30" height="60">非公開(自分だけに公開)</button></a>
            <br><a href="#"><button class="p-open_range__navybtn">保存する</button></a>
            
            
</div>
</div>
</div>
@endsection