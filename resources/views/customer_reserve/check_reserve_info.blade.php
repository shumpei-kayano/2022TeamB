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
                    <div class="p-reserve__check_title">
                        <h4>この内容で予約しますか？</h4>
                    </div>
                    <div class="d-flex"> 
                        <div class="row">
                            <div class="p-reserve__check_info">
                                <div class="p-reserve__check_person">人　数：</div>
                                <div class="p-reserve__check_date">来店日：</div>
                                <div class="p-reserve__check_time">時　間：</div>
                                <div class="p-reserve__check_name">お名前：</div>
                                <div class="p-reserve__check_phone">連絡先：</div>
                                <div class="p-reserve__check_email">メールアドレス：</div>
                            </div>
                            <div class="p-reserve__check_info">
                                <div class="p-reserve__check_person_info">2名</div>
                                <div class="p-reserve__check_date_info">2022年11月30日</div>
                                <div class="p-reserve__check_time_info">18:30</div>
                                <div class="p-reserve__check_name_info">岡野　太郎</div>
                                <div class="p-reserve__check_phone_info">09012341234</div>
                                <div class="p-reserve__check_email_info">okano@taro</div>
                            </div>
                        </div>
                    </div>
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
      @component('components.my_page_other_side_right_btn')
      @endcomponent
</div>
</div>
</div>
</div>



@endsection