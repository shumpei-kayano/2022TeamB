@extends('layouts.layout')

@section('title')
認証
@endsection

@section('main')

<form>
    <a>ログイン</a>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
        </div>
        <div class="col-auto">
          <input type="email" id="inputPassword6" class="form-control" aria-describedby="emailHelpInline">
        </div>
      </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label">Password</label>
        </div>
        <div class="col-auto">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        <div class="col-auto">
          <span id="passwordHelpInline" class="form-text">
            Must be 8-20 characters long.
          </span>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">ログイン</button><br>

    <a>アカウントをお持ちでない方はこちら</a><br>

    <button type="submit" class="btn btn-primary">アカウント作成</button>
    
  </form>

<form>
    <input type="email" placeholder="メールアドレス"/>
    <input type="password" placeholder=""/><br>
    <button type="submit" class="btn btn-primary">ログイン</button><br>
</form>

@endsection















