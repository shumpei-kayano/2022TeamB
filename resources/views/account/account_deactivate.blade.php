{{-- アカウント削除画面 --}}

@extends('layouts.layout')   
{{-- layouts.'(uedake.blade.php)をあとで読み込む --}}
@section('title')
    アカウント削除画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg"></div>
</div>
<div class="p-small_bg__contents">
    <h4>アカウント削除</h4><br>
    <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="メールアドレス">
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="メールアドレス">
    </div>
    <input class="p-tab01__tab_contents1_send" type="submit" name="submit" value="削除する">
  </div>
@endsection