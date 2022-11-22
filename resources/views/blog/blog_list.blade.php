{{-- ブログ記事一覧表示 --}}

@extends('layouts.layout')   
@section('title')
    ブログ記事一覧表示
@endsection

@section('main')
<div class="container-fluid">
    <div class="row">

      {{-- 左メニューバー --}}
      @component('components.left')
      @endcomponent
      {{-- 右側 --}}
        <div class="col-10"> 
        <div class="row">
            <div class="col-12 c-bgcolor--darkbrown">   {{-- 新着ブログ一覧表示スペースの背景色 --}}
                
                <h2 align="center">【新着ブログ一覧】</h2><br>
                <div class="row" style="row-gap:50px"> {{-- アイコン,タイトル,説明の下に余白を20pxとる --}}
                    <div class="col-12">
                      <div class="d-flex">
                      <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><h4>気軽に相談</h4><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </p></div>
                    </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                        <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><h4>気軽に相談</h4><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </p></div>
                      </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex">
                        <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><h4>気軽に相談</h4><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </p></div>
                      </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex">
                        <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><h4>気軽に相談</h4><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </p></div>
                      </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex">
                        <div class="p-open_chat_area__open_chat_list_icon"></div><div class="p-open_chat_area__open_chat_list_title"><h4>気軽に相談</h4><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </p></div>
                      </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection