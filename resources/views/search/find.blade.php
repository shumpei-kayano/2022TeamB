{{-- キーワード検索の結果表示ページ --}}
{{-- キーワード入力欄はlayout.blade.phpのheader内 --}}
@extends('layouts.layout')   
@section('title')
    検索結果表示
@endsection

@section('main')

<div class="p-search_results_container">
{{-- ユーザ名の検索結果表示 --}}
    <div class="p-search_results_container__contact_info">
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

                <a href="search_username" target="_blank" class="p-search_results_container__contact_info_other">その他のユーザー</a>
            </div>
        </div>
    </div>
    

{{-- イベントの検索結果表示 --}}
    <div class="p-search_results_container__event_info">
        <div class="p-search_results_container__event_info_title">【イベント情報】</div>
        <div class="col-12">
            <div class="row">
            {{-- 値(events)が空じゃないか判定 --}}
            @if(!empty($events))
            {{-- foreachで配列を繰り返す $events(配列) as(に) $event(変数) を1つ1つ取り出して出力--}}
            @foreach($events as $event)

        <div class="col-12">
            <div class="d-flex">
                {{-- イベントごとに１行ずつ表示する --}}
                <div class="p-search_results_container__event_info_results">
                {{-- イベントタイトルをDBから取得して表示/イベントタイトルが30文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__event_title">{{Str::limit($event->event_title, 30, '(…)' )}}</div>
                {{-- イベント詳細をDBから取得して表示/イベント詳細が150文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__event_details">{{Str::limit($event->event_detail, 150, '(…)' )}}</div>
                </div>
            </div>
        </div>
            @endforeach
            @endif
            
        <a href="contact_results" target="_blank" class="p-search_results_container__event_info_other">その他のイベント情報</a>
            </div>
        </div>
    </div>


{{-- チャットルームの検索結果表示 --}}
    <div class="p-search_results_container__restaurant_info">
        <div class="p-search_results_container__restaurant_info_title">【チャットルーム】</div>
        <div class="col-12">
            <div class="row">

                {{-- 値(chatrooms)が空じゃないか判定 --}}
                @if(!empty($chatrooms))
                @foreach($chatrooms as $chatroom)

        <div class="col-12">
            <div class="d-flex">
                {{-- チャットルームごとに１行ずつ表示する --}}
                <div class="p-search_results_container__restaurant_info_results">
                {{-- チャットルームタイトルが30文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__restaurant_title">{{Str::limit($chatroom->title, 30, '(…)' )}}</div>
                {{-- イベント詳細が150文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__restaurant_details">{{Str::limit($chatroom->room_detail, 150, '(…)' )}}</div>
                </div>
            </div>
        </div>
                @endforeach
                @endif

        <a href="contact_results" target="_blank" class="p-search_results_container__restaurant_info_other">その他の店舗情報</a>
    </div>

</div>



@endsection


