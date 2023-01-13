{{-- ※試作途中【ブログCDN読み込み】ブログ編集ページ --}}
{{-- layouts.blade.phpの//ブログテキストエディタCDN読込に追記 --}}

@extends('layouts.layout')   
@section('title')
    ブログ編集ページ
@endsection


@section('main')
{{-- 左側 ブログ内容入力欄--}}
<div class="d-flex"> 
    <div class="row">
        <div class="p-blog_edit_area__container">
            <div class="wrapper">
                <div class="content_wrapper">
                    <div class="content2">

                        {{-- enctype="multipart/form-data"は、画像などの文字以外のデータをform送信する時に必要なタグ --}}
                        <form action="/newpostsend" method="post" name="ansform" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="p-blog_edit_area__titlearea"> --}}
                                {{-- ブログタイトル入力 --}}
                               {{--  <tr>
                                    <td colspan="3">          
                                        <label for="exampleInputEmail1" class="form-label"></label>
                                        @error('title')<span class="badge bg-danger">必須</span>{{$message}}@enderror
                                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="ブログタイトル（32文字以内）">
                                        <div class="form-text" ></div>
                                    </td>
                                </tr>
                            </div> --}}
                            <input type="text" name="title" class="formtitle" style="margin-top:100px; width:800px; margin-bottom:20px; height:40px; placeholder=ブログタイトル（32文字以内）;">

                            {{-- id="editor"がQuillエディタを表示するタグ ／layout.blade.phpに記述--}}
                            <div id="editor" name="text" style="height: 400px; width:800px; margin-left:87px; border-radius:0px 0px 5px 5px; background-color:white;">
                            </div>
                            <input type="hidden" name="text">
                            <input type="submit" class="submitbtn" name="subbtn">
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex">
        <div class="row">
            <div class="p-blog_edit_area__button">
                {{-- ブログ(編集・投稿・削除)ページの右側ボタンにcomponents使用 --}} 
                @component('components.blog_right')
                @endcomponent
            </div>
        </div>
    </div>
</div>

    <script>

        //入力文字数カウントscript
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
  //#editorの所に新しいQuillを設置して、テーマはsnowを使ってください
  var quill = new Quill('#editor', {
  modules: {
    toolbar: [
       ['bold', 'italic', 'underline', 'strike'],
       [{'color': []}, {'background': []}],
       ['link', 'blockquote', 'image', 'video'],
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

