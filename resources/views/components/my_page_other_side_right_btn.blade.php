{{-- （ほかのユーザに見える側）飲食店ネット予約ページの右側ボタン --}}
{{-- （ほかのユーザに見える側）フォロー　一覧ページの右側ボタン --}}
<div class="p-customer_reserve_container">
    <button class="p-customer_reserve_container__btn_camera"> <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
      </svg></button></a>
    <button class="p-customer_reserve_container__btn"> DM送信</button></a>

    {{-- フォローのフラグを取得し、状態に応じてボタンを@ifで切り替え --}}
    {{-- ユーザーをフォローしていない場合 --}}
    <button class="p-customer_reserve_container__btn"> ＋ フォローする</button></a>

    {{-- ユーザーをフォローしている場合 --}}
    {{-- <button class="p-customer_reserve_container__btn" style="background-color: #EAAB06"> － フォロー解除</button></a> --}}

    <button class="p-customer_reserve_container__btn"> フォロー中</button></a>
    <button class="p-customer_reserve_container__btn"> フォロワー</button></a>
    <button class="p-customer_reserve_container__btn"> ブログを読む</button></a>
    <button class="p-customer_reserve_container__btn_red"> 通報する</button></a>
</div>