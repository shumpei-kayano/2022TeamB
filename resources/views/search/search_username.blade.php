{{-- キーワード検索の結果"その他のユーザー"表示ページ --}}
{{-- キーワード入力欄はlayout.blade.phpのheader内 --}}

@extends('layouts.layout')   
@section('title')
    検索結果表示
@endsection

@section('main')

<div class="p-search_results_container">
{{-- ユーザ名の検索結果表示 --}}
    <div class="p-search_results_container__contact_info1">
        <div class="p-search_results_container__contact_info_title">【ユーザー名】</div>
        <div class="col-12">
            <div class="row">
                {{-- 値(usernames)が空じゃないか判定 --}}
                @if(!empty($usernames))
                {{-- foreachで配列を繰り返す $usernames(配列) as(に) $username(変数) を1つ1つ取り出して出力--}}
                @foreach ($usernames as $username)

            <div class="col-3">
                <div class="d-flex">
                    {{-- ユーザ名を１行に４名ずつ(Controllerのpaginate)表示する --}}
                    <div class="p-search_results_container__user_info">

                        <div class="col-12">
                            <div class="d-flex">
                            {{-- ユーザアイコンを表示 --}}
                            <div class="p-search_results_container__icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            </div>

                            {{-- ユーザ名をDBから取得して表示 / ユーザ名が10文字以上の場合は「・・・」で表示する --}}
                            <div class="p-search_results_container__user_name">{{Str::limit($username->name, 10, '(…)' )}}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                @endforeach
                @endif

                <a href="search_username" target="_blank" class="p-search_results_container__contact_info_other">ここにpaginate設定する</a>
            </div>
        </div>
    </div>
    





</div>



@endsection


