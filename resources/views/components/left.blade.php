<div class="col-2 c-bgcolor--brown left-bar Category_bar">
    <div class="w-100 d-flex justify-content-center">
    <div class=p-left_menu_bar>
        カテゴリから検索
    </div>
    </div>
<br>
    @foreach ($items as $item)
    <p>{{$item->category_name}}</p>
    @endforeach
</div>