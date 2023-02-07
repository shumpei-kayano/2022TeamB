{{-- 検索結果表示ページ --}}
{{-- ※※※※※※※これは完成イメージなので機能しません※※※※※※ --}}
{{-- ※※※※※※※これは完成イメージなので機能しません※※※※※※ --}}
{{-- ※※※※※※※これは完成イメージなので機能しません※※※※※※ --}}
{{-- ※※※※※※※これは完成イメージなので機能しません※※※※※※ --}}
{{-- ※※※※※※※これは完成イメージなので機能しません※※※※※※ --}}
{{-- ※※※※※※※これは完成イメージなので機能しません※※※※※※ --}}
{{-- ※※※※※※※これは完成イメージなので機能しません※※※※※※ --}}
@extends('layouts.layout')   
@section('title')
    検索結果表示
@endsection

@section('main')
<div class="p-search_results_container">
    {{-- ユーザ名の検索結果表示 --}}
        <div class="p-search_results_container__contact_info">
            <div class="p-search_results_container__contact_info_title">ユーザー名</div>
            <div class="col-12">
                <div class="row">
                <div class="col-3">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行に４つずつ表示する --}}
                        <div class="p-search_results_container__user_info">
                            <div class="col-12">
                                <div class="d-flex">
                                <div class="p-search_results_container__icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                </div>
                            <div class="p-search_results_container__user_name">岡野Soccer</div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行に４つずつ表示する --}}
                        <div class="p-search_results_container__user_info">
                            <div class="col-12">
                                <div class="d-flex">
                                <div class="p-search_results_container__icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                </div>
                            <div class="p-search_results_container__user_name">岡野Soccer</div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行に４つずつ表示する --}}
                        <div class="p-search_results_container__user_info">
                            <div class="col-12">
                                <div class="d-flex">
                                <div class="p-search_results_container__icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                </div>
                            <div class="p-search_results_container__user_name">岡野Soccer</div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行に４つずつ表示する --}}
                        <div class="p-search_results_container__user_info">
                            <div class="col-12">
                                <div class="d-flex">
                                <div class="p-search_results_container__icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                </div>
                            <div class="p-search_results_container__user_name">岡野Soccer</div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>

            <a href="contact_results" target="_blank" class="p-search_results_container__contact_info_other">その他のユーザー</a>
        </div>
        </div>
    </div>

    {{-- イベントの検索結果表示 --}}
        <div class="p-search_results_container__event_info">
            <div class="p-search_results_container__event_info_title">イベント情報</div>
            <div class="col-12">
                <div class="row">
                    
                <div class="col-12">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行ずつ表示する --}}
                        <div class="p-search_results_container__event_info_results">
                            <div class="p-search_results_container__event_title">【竹田市】たけた城下町散策ツアー参加者募集</div>
                            <div class="p-search_results_container__event_details">2022年7月22日に城下町散策ツアーを実施します。。。。。ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行ずつ表示する --}}
                        <div class="p-search_results_container__event_info_results">
                            <div class="p-search_results_container__event_title">#別府エール飯　別府市内の・・・・・</div>
                            <div class="p-search_results_container__event_details">ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行ずつ表示する --}}
                        <div class="p-search_results_container__event_info_results">
                            <div class="p-search_results_container__event_title">【臼杵市】　うすき竹宵</div>
                            <div class="p-search_results_container__event_details">2022年11月22日～〇日まで開催されます。。。。。ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</div>
                        </div>
                    </div>
                </div>

            <a href="contact_results" target="_blank" class="p-search_results_container__event_info_other">その他のイベント情報</a>
        </div>
    </div>
</div>

    {{-- 店舗の検索結果表示 --}}
        <div class="p-search_results_container__restaurant_info">
            <div class="p-search_results_container__restaurant_info_title">店舗情報</div>
            <div class="col-12">
                <div class="row">
                    
                <div class="col-12">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行ずつ表示する --}}
                        <div class="p-search_results_container__restaurant_info_results">
                            <div class="p-search_results_container__restaurant_title">〇〇食堂</div>
                            <div class="p-search_results_container__restaurant_details">2022年7月22日に城下町散策ツアーを実施します。。。。。ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行ずつ表示する --}}
                        <div class="p-search_results_container__restaurant_info_results">
                            <div class="p-search_results_container__restaurant_title">Cafe 〇〇〇〇〇〇〇〇〇</div>
                            <div class="p-search_results_container__restaurant_details">2022年7月22日に城下町散策ツアーを実施します。。。。。ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex">
                        {{-- ユーザ名ごとに１行ずつ表示する --}}
                        <div class="p-search_results_container__restaurant_info_results">
                            <div class="p-search_results_container__restaurant_title">フレンチレストラン蔦</div>
                            <div class="p-search_results_container__restaurant_details">ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</div>
                        </div>
                    </div>
                </div>

            <a href="contact_results" target="_blank" class="p-search_results_container__restaurant_info_other">その他の店舗情報</a>
        </div>

        {{-- ページネーションの設定 --}}
        {{-- <div class="p-blog_edit_area__paginate_container">
            {{ $data->links() }}
        </div> --}}
    
</div>

@endsection