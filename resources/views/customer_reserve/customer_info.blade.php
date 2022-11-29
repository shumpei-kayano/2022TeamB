{{-- 顧客　飲食店予約代表者情報入力ページ --}}
@extends('layouts.layout')   
@section('title')
    ご予約代表者様情報入力
@endsection

@section('main')
{{-- 左側 --}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-blog_edit_area__container">
            <div class="p-blog_edit_area__close_img" href="{{URL::to('terms_of_service')}}"><img src={{asset('/img/close.png')}} onclick="location.href='create_new_open'" alt="" height="50px" width="40px"></div>
            <div class="p-reserve__container">
            <div class="p-reserve__title">予約者情報入力</div>
            {{-- 予約者氏名入力欄 --}}
            <div class="p-reserve__text_input1">
                <div class="row">
                    <div class="col">
                    <input type="text" class="p-reserve__form-control_family_name" placeholder="姓（family name）" aria-label="First name">
                    </div>
                    <div class="col">
                    <input type="text" class="p-reserve__form-control_first_name" placeholder="名（given name）" aria-label="Last name">
                    </div>
                </div>
            </div>
            {{-- メールアドレス入力欄 --}}
            <div class="p-reserve__text_input2">
                <div class="row mb-3">
                    <div class="col-sm-10">
                    <input type="email" class="p-reserve__form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
            </div>
            {{-- 電話番号入力欄 --}}
            <div class="p-reserve__text_input3">
                <div class="row mb-3">
                    <div class="col-sm-10">
                    <input type="number" class="p-reserve__form-control" id="inputEmail3" placeholder="Phone Numbe（ハイフンは除いてください）">
                    </div>
                </div>
            </div>
            <button class="p-reserve__next_button" type="button" onclick="location.href='check_reserve_info'">予約する</button>
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