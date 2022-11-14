@extends('layouts.uedake')   
@section('title')
    アカウント登録の完了画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <br>
        <div class="content_block">     {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">アカウント登録が完了しました！</h4><br>
        <div align="center">
            <input class="p-header__login-button" type="submit" value="戻る">
          </div>
    </div>
</div>
</div>
</div>
@endsection