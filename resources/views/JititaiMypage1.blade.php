@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
<section>
  {{--  ----------セクション上部---------  --}}
  <div class="upper">
    <div class="upper__left">
      <table class="upper__table">
        <tbody>
          <tr class="upper__tr">
            <th class="upper__th">自治体名</th>
            
            <th>電話番号</th>
            <tr><td><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" >
              <div id="emailHelp" class="form-text" ></div>
            
            </tr>
          <tr>
            <th>メールアドレス（ログイン用）</th>
            <th><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1">
              <div id="emailHelp" class="form-text"></div></div>
            </div></th>
          </tr>
          <tr>
            <th><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1">
              <div id="emailHelp" class="form-text"></div></div>
            </div></th>
            <th>住所</th>
          </tr>
            
            <td><label for="exampleInputEmail1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" >
              <div id="emailHelp" class="form-text"></td>
          </tr>
          <div class="selfin">
            <label for="exampleFormControlTextarea1" class="form-label">紹介文</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="selfin">
            <label for="exampleFormControlTextarea1" class="form-label"> イベント募集（新着順）</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="selfin">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="selfin">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </tbody>
      </table>
    </div>
    @endsection 