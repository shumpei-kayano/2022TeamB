{{-- ブログ詳細ページ表示 --}}

@extends('layouts.layout')   
@section('title')
    ブログ詳細ページ表示
@endsection

@section('main')
<div class="container-fluid">
    <div class="row">

      {{-- 左メニューバー --}}
      @component('components.left')
      @endcomponent
      {{-- 右側 --}}

<div class="col-10"> 
<div class="row">
            <div class="col-12 c-bgcolor--darkbrown">   {{-- 新着ブログ一覧表示スペースの背景色 --}}
                <div class="row" >
                <div class="create_btn">
                    <a class="p-large_bg_btn__back" href="{{URL::to('new_blog_list')}}"><img src={{asset('/img/back.png')}} alt="" height="40px" width="80px"></a>
                </div>
            
                <div class="p-blog_area">   {{-- ブログ詳細ページの背景色 --}}
                    <div class="p-blog_area__gray_bg">
                    <div class="col-12">
                        <div class="row" >
                        <div class="d-flex">
                        <div class="p-blog_area__user_icon"></div>
                        <div class="p-blog_area__user_name">岡野太郎</div>
                        <div class="p-blog_area__user_data">投稿日：2022.10.10.（水）</div>
                        <div class="p-blog_area__user_time">時　間：14:15</div>
                        </div>
                    </div>

                    <div class="p-blog_area__titlearea">
                        <h1>ブログタイトル</h1>
                    </div>
                    <div class="p-blog_area__textarea">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!
                        </p>
                        <div class="img"><img src="./img/food.png" width="100%" height="330px"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim voluptatibus sequi dolor, numquam quia. Repellat voluptas repellendus in porro adipisci vero iusto! Voluptatibus dolor veritatis eius neque, facilis voluptas!
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection