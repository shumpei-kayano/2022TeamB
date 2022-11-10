@extends('layouts.layout')

@section('main')
<br><br>
<body>
    <header class="p-header">
        <nav class="navbar navbar-light">
          <div class="container-fluid logo">
            <a class="navbar-brand" href="#">
              <img src="/img/logo_hane.png" alt="">
              <img src="/img/logo_usagi.png" alt="">
            </a>
          </div>
        </nav>
    </header>
</body>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card c-bgcolor--darkbrown">

                <br>
                <h4 align="center">アカウント登録を完了させてください</h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

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

                        <div align="center">
                            <input class="p-login-button" type="submit" value="登録">
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
