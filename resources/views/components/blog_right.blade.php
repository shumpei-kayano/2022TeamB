{{-- ブログ(編集・投稿・削除)ページの右側ボタン --}}
<div class="p-posted_blog_container">
   {{-- <form action="/newpostsend" method="post">
    @csrf --}}
    <button class="p-posted_blog_container__btn" onclick="location.href='create2'"> ブログを書く</button></a>
    <button class="p-posted_blog_container__btn" onclick="location.href='my_blog_edit'"> 編集する</button></a>
    <button class="p-posted_blog_container__btn" onclick="location.href='my_blog_edit'"> 保存</button></a>
    <button class="p-posted_blog_container__btn" onclick="location.href=''"> 公開する</button></a>
    <button class="p-posted_blog_container__btn" onclick="location.href='blog_check_deactivate'"> 削除する</button></a>
{{-- </form> --}}
</div>
{{-- <input type="submit" class="submitbtn"> --}}