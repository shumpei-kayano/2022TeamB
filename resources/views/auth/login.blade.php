@extends('layouts.uedake')

@section('title')
ログイン画面
@endsection

@section('main')
      <div class="p-login_bg">
                <div class="p-login_bg__card_bg"><br>
                    <h4 align="center">ログイン</h4>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('  ') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autocomplete="email" autofocus>
    
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
                                  <input class="p-header__login-button" type="submit" value="ログインする" href="{{ route('register') }}">
                                </div>
                                
                        </form>
                        
                        <br>
                        
                        
                          <div align ="center">
                            <p class="p-login-card__bun">アカウントをお持ちではない方はこちら</p>

                            <form action="/register">
                              <input class="p-account-button" type="submit" value="アカウント新規作成">
                          </div>

                    </div>
                </div>
    </div>




@endsection

