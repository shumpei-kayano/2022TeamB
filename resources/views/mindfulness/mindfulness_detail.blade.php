@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
<div class="p-mindfulness-detail">
    <div class="p-mindfulness-detail__left">
        <div class="p-mindfulness-detail__top">
            <h1>マインドフルネス呼吸法</h1>
            <div class="p-mindfulness-detail__middle">
                <p>〜カウントタイマーに併せて、次のことを意識して行ってみましょう〜</p><br>


                <p>①背筋を伸ばし、背もたれから離れて座る。お腹はゆったり、<br>
                手は太ももの上に、足は組まない。目は閉じる。<br></p>

                <p>②接触の感覚（ああしの裏と床、お尻と椅子、手と太もも）<br>
                や重力の感覚に意識を向ける。<br></p>

                <p>③呼吸に注意を向ける（鼻を通る空気、呼吸による胸・<br>
                お腹の動き、呼吸と呼吸の切れ目、吸う息と吐く息の温度差）。<br>
                深呼吸や呼吸コントロールは不要（自然に呼吸を待つような感覚で）。<br>
                呼吸を数えてもOK。<br></p>

                <p>④雑念が浮かんだら、その事実に気づき、注意を呼吸に戻します。<br>
                雑念は生じて当然なので自分を責めない。</p>
            </div>
        </div>    
    </div>
    <div class="p-mindfulness-detail__right">
        <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
        <form action="mypage_del">
        <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
        </form>
        <a href="#"><button class="p-mypage-setting__btn"> フォロワー登録・編集</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
        <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
    </div>    
</div>        
@endsection        