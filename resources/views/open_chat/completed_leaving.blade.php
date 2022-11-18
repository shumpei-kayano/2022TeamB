{{-- オープンチャット”退室完了”画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット退室完了画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <br>
        <div class="content_block">     {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">退室しました</h4><br>
        <div align="center">
            <form action="open_chat_list">
            <input class="p-header__login-button" type="submit" value="戻る">
            </form>
          </div>
    </div>
</div>
</div>
</div>
@endsection