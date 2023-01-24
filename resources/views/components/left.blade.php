<div class="col-2 c-bgcolor--brown left-bar Category_bar">
    <div class="w-100 d-flex justify-content-center">
        <div class="p-left_menu_bar">
            <p>カテゴリから検索</p>
            <p>全てを検索</p>
        </div>
    </div>
    <br>
    @foreach ($categories as $item)
    <p><a href="{{ url('categorysearch/'.$item->id) }}">{{$item->category_name}}</a></p>
    @endforeach
</div>