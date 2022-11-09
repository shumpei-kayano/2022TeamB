@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">団体名</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">電話番号</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">住所</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=>
  </div>
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
  @endsection