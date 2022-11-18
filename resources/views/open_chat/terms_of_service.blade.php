{{-- オープンチャット利用規約表示画面 --}}
@extends('layouts.layout')   
@section('title')
    オープンチャット利用規約
@endsection

@section('main')
<div class="p-large_bg">
    <div class="p-large_bg__card_bg">   {{-- チャット関連の背景色 --}}
        <div class="p-large_bg__terms_of_service">
            <div class="terms_of_service_block">
                <a class="p-large_bg__terms_of_service_logo_img" href="{{URL::to('open_chat_list')}}"><img src={{asset('/img/close.png')}} alt="" width="40px" height="50px"></a>
            <h3>オープンチャット禁止事項</h3><br>
            <ol>
                <li>個人的な出会いを目的とする行為・アプリIDやメールアドレス等の個人情報の投稿禁止</li>
                <li>未成年の不健全な出会いや集まり、宗教などの計画・勧誘の禁止</li>
                <li>誹謗中傷・暴言・わいせつな投稿の禁止</li>
                <li>著作権や肖像権・プライバシーを侵害する行為の禁止</li>
                <li>荒らし行為、違法行為、その他の迷惑行為の禁止</li>
            </ol>
                <p style="bold">もし、違反した場合は？</p>
                <p style="bold">オープンチャットの利用制限に加え、アプリの利用停止になる場合があります。</p>
                <p>より安心安全な環境づくりのため、上記のような禁止行為を発見された場合は、<br>
                積極的に「通報」機能をご利用くださいますようお願い申し上げます。</p><br>
            <form action="create_new_open">
                <input class="p-large_bg__check_btn" type="submit" value="確認しました">
            </form>
            </div>
        </div>
    </div>
</div>


@endsection
