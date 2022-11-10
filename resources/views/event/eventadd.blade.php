@extends('layouts.layout')

@section('title')
    イベント募集投稿一覧
@endsection

@section('main')
    <div class="row">
        @component('components.left')
        @endcomponent
        <div class="eventadd_right">
           <section>
            <h2>新着順　イベント募集投稿</h2>
            <div>
                <table border="1">
                    <tbody>
                        <tr>
                            <td colspan="3">（必須）イベントタイトル</td>
                        </tr>
                        <tr>
                            <td colspan="3">場所</td>
                        </tr>
                        <tr>
                            <td colspan="2">（必須）開始　2022/02/22</td>
                            <td>開始時間</td>
                        </tr>
                        <tr>
                            <td colspan="2">（必須）終了　2022/02/22</td>
                            <td>終了時間</td>
                        </tr>
                        <tr>
                            <td colspan="3">関連URL お申し込みはこちら</td>
                        </tr>
                        <tr>
                            <td colspan="3">イベント内容記述</td>
                        </tr>
                    </tbody>
                </table>
                
            <div>
                <div>
                    
            </div>
           </section>
        </div>
    </div>
    </div>
@endsection