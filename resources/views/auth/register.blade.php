@extends('layouts.uedake')

@section('title')
アカウント情報入力
@endsection
@section('main')
<div class="p-login_bg">
    
            <div class="p-login_bg__card_bg">

                <br>
                <h4  class="p-register-card__title">アカウント登録を完了させてください</h4>
                <div class="card-body p-register-card__body">
                    <form method="POST" action="{{ route('register') }}" class="p-register-card__form">
                        @csrf
                        <input id="name" type="hidden" name="company_register" value=1 >

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('  ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="ユーザー名"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('  ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="メールアドレス"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('  ') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="パスワード"
                                name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('  ') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                                placeholder="確認用パスワード" required autocomplete="new-password">
                            </div>
                        </div>

                        <input type="hidden" name="publish_flag" value=0>
                        <input type="hidden" name="icon" value="noimage.jpg">
                        <div align="center">
                            <input class="p-header__login-button" type="submit" value="登録">
                          </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
