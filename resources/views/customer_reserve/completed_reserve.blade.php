{{-- 予約完了画面 --}}
@extends('layouts.layout')   
@section('title')
    予約完了画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <br>
        <div class="content_block">     {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">予約が完了しました</h4><br>
        <div align="center">
            <form action=""> {{-- 店舗マイページへ戻る　※アドレス確認 --}}
            <input class="p-header__login-button" type="submit" value="戻る">
            </form>
          </div>
    </div>
</div>
</div>
</div>
@endsection