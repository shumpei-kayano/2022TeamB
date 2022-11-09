@extends('layouts.layout')

@section('title')
    アカウント仮登録画面
@endsection

@section('main')
    <div class="tab-wrap">
        <input id="TAB-01" type="radio" name="TAB" class="tab-switch" checked="checked" />
        <label class="tab-label" for="TAB-01">ボタン 1</label>
        <div class="tab-content">  
            {{-- <input class="p-searchbox" type="search" name="search" placeholder="キーワードを入力">
            <input class="p-search-button" type="submit" name="submit" value="検索"> --}}
        </div>
        <input id="TAB-02" type="radio" name="TAB" class="tab-switch" />
        <label class="tab-label" for="TAB-02">ボタン 2</label>
        <div class="tab-content">
            コンテンツ 2
        </div>
        <input id="TAB-03" type="radio" name="TAB" class="tab-switch" />
        <label class="tab-label" for="TAB-03">ボタン 3</label>
        <div class="tab-content">
            コンテンツ 3
        </div>
    </div>
    
</div>


@endsection

