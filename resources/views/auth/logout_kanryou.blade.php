@extends('layouts.layout')

@section('title')
ログアウト完了画面
@endsection

@section('main')
<div class="p-small_bg">
    
    <div class="p-small_bg__card_bg">
        <a href="{{URL::to('/')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="50px" class="p-logo_img"></a>
    </div>
    
</div>
@endsection

