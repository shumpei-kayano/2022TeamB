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
                            <div class="p-search_results_container__icon"  onclick="location.href='/user1/{{$username->id}}'" >
                                <img src="{{ asset('storage/userimg/' . $username->icon)  }}" class="p-blog_area__search_user_icon" alt="写真がありません" style="width:40px; height:40px; border-radius:50%;">
                            </div>

                            {{-- ユーザ名をDBから取得して表示 / ユーザ名が10文字以上の場合は「・・・」で表示する --}}
                            <div class="p-search_results_container__user_name" onclick="location.href='/user1/{{$username->id}}'">{{Str::limit($username->name, 20, '…' )}}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                @endforeach
                @endif

                {{-- <a href="search_username" target="_blank" class="p-search_results_container__contact_info_other">その他のユーザー</a> --}}
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
                <div class="p-search_results_container__event_info_results" onclick="location.href='/event014/{{$event->id}}'">
                {{-- イベントタイトルをDBから取得して表示/イベントタイトルが30文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__event_title">{{Str::limit($event->event_title, 50, '…' )}}</div>
                {{-- イベント詳細をDBから取得して表示/イベント詳細が150文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__event_details">{{Str::limit($event->event_detail, 150, '…' )}}</div>
                </div>
            </div>
        </div>
            @endforeach
            @endif
            
        {{-- <a href="contact_results" target="_blank" class="p-search_results_container__event_info_other">その他のイベント情報</a> --}}
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
                <div class="p-search_results_container__restaurant_info_results" onclick="location.href='/open_chat_preview/{{$chatroom->id}}'">
                {{-- チャットルームタイトルが30文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__restaurant_title">{{Str::limit($chatroom->title, 50, '…' )}}</div>
                {{-- イベント詳細が150文字以上の場合は「・・・」で表示する --}}
                <div class="p-search_results_container__restaurant_details">{{Str::limit($chatroom->room_detail, 150, '…' )}}</div>
                </div>
            </div>
        </div>
                @endforeach
                @endif

        {{-- <a href="contact_results" target="_blank" class="p-search_results_container__restaurant_info_other">その他のチャットルーム</a> --}}
    </div>

</div>



@endsection


