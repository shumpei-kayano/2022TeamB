@extends('layouts.layout')
@section('title')
    トップ
@endsection

@section('main')
<div class="p-mindfulness-start">
    <div class="p-mindfulness-start__left">
      <div class="p-mindfulness-start__batsu" >
        <form>
          <a class="p-mindfulness-start__logo_img" href="{{URL::to('mindfulness_end')}}"><img src={{asset('/img/close.png')}} alt="" height="50px" width="40px"></a>
          </form>
        </div>
        {{-- <span  class="cross"></span> --}}
      <div class="p-mindfulness-start__top">
      <div class="p-mindfulness__timer">
          <div style="font-size:100px" id="timer">0</div>
          
      </div>
          <a href="" id="start" class="inactive"><font size="7">スタート</font></a>
      </div>
    </div>
    {{--  <div class="p-mindfulness-start__right">
      <img src="{{ asset('/img/noimage.jpg') }}" width="200px" height="200px">
      <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
      <a href="#"><button class="p-mypage-setting__btn"> フォロワー登録・編集</button></a>
      <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
      <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
      <a href="#"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
      <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
      <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
    </div>  --}}
</div>
  <script>
    window.onload=function(){
  document.querySelector('#start').addEventListener('click',function(e){
    e.preventDefault();
    var count = 0;
    var id = setInterval(function(){
      count++;
      document.querySelector('#timer').textContent=count;
      if(count >= 5) clearInterval(id);
    },1000);
  });
  
}
</script>
  @endsection