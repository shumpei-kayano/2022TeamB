@section('title')

    トップ

@endsection



@section('main')
<div class="p-mypage-account-delete">
  <div class="p-mypage-account-delete__left">
    <a href="#"><button class="p-user-mypage__btn"> アカウント削除</button></a>
  </div>
  <div class="p-mypage-setting__right">
    <img src="{{ asset('/img/noimage.png') }}" width="200px" height="200px">
    <a href="#"><button class="p-mypage-setting__btn"> 設定</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> フォロワー登録・編集</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> フォロー中</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> フォロワー</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> ブログ投稿</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> チャット</button></a>
    <a href="#"><button class="p-mypage-setting__btn"> DM</button></a>
  </div>
</div>
@endsection