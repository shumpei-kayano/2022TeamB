@extends('layouts.layout')

@section('title')

    トップ

@endsection



@section('main')

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">団体名</label>
    <input type="email" class="form-control" id="exampleFormControlInput1"style="width:700px;">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">電話番号</label>
    <input type="email" class="form-control" id="exampleFormControlInput1"style="width:700px;">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">住所</label>
    <input type="email" class="form-control" id="exampleFormControlInput1"style="width:700px;">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">紹介文</label>
    <input type="email" class="form-control" id="exampleFormControlInput1"style="width:700px; height:100px;"></textarea>
  </div>
  @endsection