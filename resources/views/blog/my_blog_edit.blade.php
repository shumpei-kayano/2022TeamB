{{-- ブログ編集ページ https://nebikatsu.com/7808.html/　--}}
@extends('layouts.layout')   
@section('title')
    ブログ編集ページ
@endsection


@section('main')
{{-- 左側 ブログ内容入力欄--}}
    {{-- 左側 --}}
    <div class="d-flex"> 
        <div class="row">
            <div class="p-blog_edit_area__container">

                {{-- URLで、この/newpostsendというURLに入力されたデータを送信する --}}
                <form action=/update method='post' name="ansform" enctype="multipart/form-data">  
                {{-- なりすましアクセスなどを防ぐコードで、Laravelにフォームを設置する時は必ずこの@csrfを付けないと、フォームが動かない --}}
                @csrf                                  
                <input type="text" name="title" value="{{ $data->title}}" class="formtitle" style="margin-top:100px; width:800px; margin-bottom:20px; height:40px; placeholder=ブログタイトル（32文字以内）;">
                    {{-- id="editor"がQuillエディタを表示するタグ ／下の<script>内にに記述--}}
                    <div id="editor" name="text" style="height: 400px; width:800px; margin-left:87px; border-radius:0px 0px 5px 5px; background-color:white;">
                    {{-- {{ }}を{!! nl2br( ) !!} に変える事で、フォームの改行を<br>に自動変換する --}}
                        {!! nl2br($data->text)!!}
                    </div>
                    {{-- 隠しフィールド／この隠しフィールドに、JSを使って、Quillエディタに書き込まれた投稿を移し替える --}}
                    {{-- Quillエディタ自体はJSだが、移し替える事で、Laravelのformデータとして扱う事ができるようになる --}}
                    <input type="hidden" name="text">
                    {{-- 隠しフィールドで $dataオブジェクトから値を取り出しControllerのvalueに設定する--}}
                    {{-- 投稿済みブログを編集し、更新するためのfindのためにblog_idを送る必要がある テキストP.261 --}}
                    <input type="hidden" name="blog_id" value="{{$data->id}}">
                    <input type="submit" name="subbtn" value="更新する" class="p-posted_blog_container__blog_btn" >
                </form>
                
            </div>
        </div>
        

        <div class="d-flex">
            <div class="row">
            
            {{-- ブログページの右側ボタン(ブログを書く・削除する) --}}
            <div class="p-blog_edit_area__button">
                <form action="/blog_delete" method="post">
                @csrf
                {{-- 投稿済みブログを編集し、更新するためのfindのためにblog_idを送る必要がある テキストP.261 --}}
                <input type="hidden" name="blog_id" value="{{$data->id}}">
                {{-- ボタンを表示 --}}
                <button class="p-posted_blog_container__btn" name="delete" type="submit">削除する</button>
                </form>
            </div>

            </div>
        </div>
    </div>




{{-- 入力文字数カウントscript --}}
<script>

$(function(){
    //カウントするフィールドを監視
    $("#floatingTextarea2").keyup(function(){
         //現在入力されている文字
        var text = $(this).val();
         //正確にカウントするため改行コード削除
        text = text.replace((new RegExp("\r\n","g")),"");
        text = text.replace((new RegExp("\n","g")),"");
        //現在の文字数
        var count = text.length;
        //管理者が設定した上限文字数
        var moji_limit = $(this).attr("limit");
        //文字数をリアルタイムの表示
        $("#moji_suu").text(count);
        //処理分け
        if(count == 0){
            //字を消して0文字となった場合。
            $("#moji_suu").text("0");
        } else if(count > moji_limit) {
            //上限文字数を超えたら赤色表示
            $("#moji_suu").css("color", "red");
        } else {
            //文字数が範囲内なら色を戻す
            $("#moji_suu").css("color", "");
        }
    });
});


//ブログテキストエディタCDN読込
//#editorの所に新しいQuillを設置して、テーマはsnowを使う
//https://nebikatsu.com/7896.html/

var quill = new Quill('#editor', {
    modules: {
        //ブログエディタのツールバーをカスタマイズ
        toolbar: [
        ['bold', 'italic', 'underline', 'strike'],
        [{'color': []}, {'background': []}],
        ['link', 'blockquote', 'image'],
        [{ list: 'ordered' }, { list: 'bullet' }]
        ]
    },
    placeholder: '文章を入力してください（15,000文字以内）',
    theme: 'snow'
}); 


// 回答フォームを送信
document.ansform.subbtn.addEventListener('click', function() {
// Quillのデータをinputに代入
document.querySelector('input[name=text]').value = document.querySelector('.ql-editor').innerHTML;
// 送信
document.ansform.submit();
});

</script>


@endsection

