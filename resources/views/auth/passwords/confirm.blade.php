{{-- アカウント削除画面 --}}

@extends('layouts.layout')   
@section('title')
    アカウント削除画面
@endsection

@section('main')
<div class="p-small_bg">
    <div class="p-small_bg__card_bg">   {{-- ログイン画面などの背景色 --}}
        <br>
        <div class="content_block">     {{-- 背景内の中央にテキスト類をブロックで配置 --}}
        <h4 class="p-register-card__title">アカウント削除</h4><br>


        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('  ') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                    placeholder="パスワード" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div align="center">
                <input class="p-header__login-button" type="submit" value="削除する">
              </div>
        </form>

    </div>
</div>
</div>
</div>
@endsection
