@extends('layouts.layout')

@section('title')
ログアウト完了画面
@endsection

@section('main')
<div class="p-small_bg">
    
    <div class="p-small_bg__card_bg">
        <a href="{{URL::to('/')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="40px" class="p-small_bg__logo_img"></a>
    <h4 class="p-small_bg__simasita">ログアウトしました！</h4>
    </div>
    
</div>
@endsection

