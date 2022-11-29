{{-- 顧客　飲食店予約情報確認画面 --}}
@extends('layouts.layout')   
@section('title')
    ご予約情報　確認画面
@endsection

@section('main')
{{-- 左側 --}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-blog_edit_area__container">
            <div class="p-reserve__container">
                <div class="p-reserve__check_reserve_container">
           
                
                <div class="yes_or_no">
                    <form action="completed_reserve">
                    <input class="p-header__login-button yes_or_no__yes" type="submit" value="はい">  {{-- DB未設定 --}}
                    </form>
                    <form action="select_reserve">
                    <input class="p-header__login-button yes_or_no__no" type="submit" value="いいえ">
                    </form>
                  </div>
                </div>
            </div>
        </div> 
    </div>

<div class="d-flex">
    <div class="row">
    <div class="p-blog_edit_area__button_1">
      {{-- 飲食店予約ページの右側ボタンにcomponents使用 --}} 
      @component('components.my_page_right_btn')
      @endcomponent
</div>
</div>
</div>
</div>
</div>
</div>


@endsection