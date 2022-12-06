{{-- 飲食店（自分に見える側）フォロワー画面 --}}
@extends('layouts.layout')   
@section('title')
    フォロワー
@endsection

@section('main')
{{-- 左側 --}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-follow_area__container">         
            <div class="p-follow_area__close_img" href="{{URL::to('')}}"><img src={{asset('/img/close.png')}} onclick="location.href='create_new_open'" alt="" height="50px" width="40px"></div>
            {{-- フォロー中やフォロワー数の合計が表示される --}}
            <div class="p-follow_area__total_count">
            <div class="p-follow_area__account_count">フォロワー　15</div>
            </div>
            {{-- フォロー中やフォロワーのユーザ一覧が表示される --}}
            <div class="p-follow_area__account_list_area">
                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div> 
                    
                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">姫島村観光協会</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">飲食店〇〇</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div>

                    <div class="d-flex"> 
                        {{-- ユーザアイコンを表示 --}}
                        <div class="p-follow_area__account_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        {{-- ユーザアイコンの右隣にユーザネームを表示 --}}
                        <div class="p-follow_area__account_name">岡野Soccer</div>
                    </div>
                    </div>
            </div> 
        </div>

{{-- ページ右側のボタン設定 --}}
<div class="d-flex">
    <div class="row">
        <div class="p-blog_edit_area__button_1">
            {{-- 右側ボタンにcomponents使用 --}} 
            @component('components.my_page_this_side_right_btn')
            @endcomponent
        </div>
    </div>
</div>

</div>

@endsection