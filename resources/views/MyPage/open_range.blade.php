@extends('layouts.layout')

@section('title')

    トップ
@endsection

@section('main')    



<div class="p-login_bg">
    <div class="p-login_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <div class="p-open_range">
            <a href="{{URL::to('/')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="40px" class="p-small_bg__logo_img"></a>
            <br><h3>公開範囲の設定</h3>
            <br><a href="#"><button class="p-open_range__b"><img src="./img/ダウンロード.png" width="65" height="50" border="0" style="opacity: 0.5"> 全体に公開</button></a>
            <br><a href="#"><button class="p-open_range__t"><img src="./img/double human.svg" width="50" height="30" border="0"> フォロワーだけに公開</button></a>
            <br><a href="#"><button class="p-open_range__n"><img src="./img/onehuman.png" width="80" height="60"> 自分だけに公開</button></a>
            <br><a href="#"><button class="p-open_range__navybtn">保存する</button></a>
            
            
</div>
</div>
</div>
@endsection