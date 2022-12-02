{{-- 顧客　飲食店の予約ページ --}}
@extends('layouts.layout')   
@section('title')
    お客様飲食店予約ページ
@endsection

@section('main')
{{-- 左側 --}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-blog_edit_area__container">
            <div class="p-blog_edit_area__close_img" href="{{URL::to('terms_of_service')}}"><img src={{asset('/img/close.png')}} onclick="location.href='create_new_open'" alt="" height="50px" width="40px"></div>
            <div class="p-reserve__container">
            <div class="p-reserve__title">ネット予約</div>
            <div class="p-reserve__text1">人　数
            <select class="p-reserve__form-select" aria-label="Default select example">
                <option selected>選択してください</option>
                <option value="1">1</option>       {{-- 一旦、仮のプルダウンメニューを入れています --}}
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            </div>
            <div class="p-reserve__text2">来店日
            <select class="p-reserve__form-select" aria-label="Default select example">
                <option selected>選択してください</option>
                <option value="1">2022年11月11日（水）</option>    {{-- 一旦、仮のプルダウンメニューを入れています --}}
                <option value="2">2022年11月12日（木）</option>
                <option value="3">2022年11月13日（金）</option>
            </select>
            </div>
            <div class="p-reserve__text3">時　間
            <select class="p-reserve__form-select" aria-label="Default select example">
                <option selected>選択してください</option>
                <option value="1">17:30</option>        {{-- 一旦、仮のプルダウンメニューを入れています --}}
                <option value="2">18:00</option>
                <option value="3">18:30</option>
            </select>
            </div>
            <button class="p-reserve__next_button" type="button"onclick="location.href='customer_info'">次へ</button>
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
</div>
</div>


@endsection