@extends('layouts.layout')

@section('title')
    トップ
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
          {{-- おすすめ写真表示 --}}
          <div class="col-12 c-bgcolor--darkbrown">
            <div class="slider">  
              <div class="img"><img src="./img/harajirinotaki.jpg" width="100%" height="230px"></div>
              <div class="img"><img src="./img/bungotakada.jpg" width="100%" height="230px"></div>   
              <div class="img"><img src="./img/ayu.jpg" width="100%" height="230px"></div>
              <div class="img"><img src="./img/usajingu.jpg" width="100%" height="230px"></div>
          </div>
          </div>
        </div>
          <div class="row">
            {{-- エリアから探す テーブルで表示--}}
            <div class="col-8 c-bgcolor--beige">
              <br>
              <div class="p-area_search">
              <div class="p-area_search__circle">エリアから<br>さがす</div>
              <table class="p-area_search__area_table">
                <tbody>
                  <tr>
                    <td>　　　大分市</td><td>　　日田市</td><td>　　　津久見市</td><td>　　杵築市</td><td>　　由布市</td><td>　　日出町</td>
                  </tr>
                  <tr>
                    <td>　　　別府市</td><td>　　佐伯市</td><td>　　　 竹田市</td><td>　　 宇佐市</td><td>　　国東市</td><td>　　九重町</td>
                  </tr>
                  <tr>
                    <td>　　　中津市　</td><td>　　臼杵市　</td><td>　　 豊後高田市　</td><td>　 豊後大野市　</td><td>　　姫島村　</td><td>　　玖珠町　</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br>
          </div>

          {{-- 新着ブログコーナー --}}
            <div class="col-4 c-bgcolor--brown">
              <div class=p-blog>【新着ブログ】</div>
              <div class="p-blog__blog_area">
                <div class="p-blog__blog_user_icon"></div><p class="p-blog__blog_title">　2022.10.22.〇〇〇に行ってきた</p>
              </div>
              <div class="p-blog__blog_area">
                <div class="p-blog__blog_user_icon"></div><p class="p-blog__blog_title">　2022.10.20.〇〇〇に行ってきた</p>
              </div>
              <div class="click"><a href="#">もっと見る...Click here</a></div>
            </div>
        </div>

        {{-- イベント掲示板 --}}
        <div class="row">
          <div class="col-4 c-bgcolor--darkbrown">
            <div class=p-event>【イベント募集掲示板】</div><br>
            <div class="p-event__event_area">
              <p class="p-event__event_title">2022.10.29.<br>トリニータファン集まれ！オフ会開催</p>
            </div>
            <div class="p-event__event_area">
              <p class="p-event__event_title">2022.10.22.<br>ゲーム大会開催</p>
            </div>
            <div class="p-event__event_area">
              <p class="p-event__event_title">2022.10.20.<br>一緒に焼き肉行きませんか</p>
            </div>
            <div class="p-event__event_area">
              <p class="p-event__event_title">2022.10.15.<br>フットサルメンバー募集</p>
            </div>
            <div class="click"><a href="#">もっと見る...Click here</a></div>
          </div>

        {{-- 自治体コーナー --}}
          <div class="col-4 c-bgcolor--brown">
            <div class="p-gov">【県・市町村からの募集】</div><br>
            <div class="p-gov__gov_area">
              <p class="p-gov__gov_title">2022.10.29.<br>（竹田市）岡城跡散策</p>
            </div>
            <div class="p-gov__gov_area">
              <p class="p-gov__gov_title">2022.10.22.<br>（豊後高田市）国宝　富貴寺大堂ライトアップ</p>
            </div>
            <div class="p-gov__gov_area">
              <p class="p-gov__gov_title">2022.10.20.<br>（杵築市）城下町散策ツアー</p>
            </div>
            <div class="p-gov__gov_area">
              <p class="p-gov__gov_title">2022.10.19.<br>（臼杵市）臼杵焼き陶芸体験</p>
            </div>
            <div class="click"><a href="#">もっと見る...Click here</a></div>
          </div>

        {{-- オープンチャット --}}
          <div class="col-4 c-bgcolor--beige">
            <div class="p-open">【オープンチャットコーナー】</div><br>
            <div class="row">
              <div class="col-4">
                <div class="p-open__open_chat__icon"></div><p class="p-open__open_chat_title">気軽に相談</p>
              </div>
              <div class="col-4">
                <div class="p-open__open_chat__icon"></div><p class="p-open__open_chat_title">Python質問</p>
              </div>
              <div class="col-4">
                <div class="p-open__open_chat__icon"></div><p class="p-open__open_chat_title">メンタル相談</p>
              </div>
              <div class="col-4">
                <div class="p-open__open_chat__icon"></div><p class="p-open__open_chat_title">生活の相談</p>
              </div>
              <div class="col-4">
                <div class="p-open__open_chat__icon"></div><p class="p-open__open_chat_title">悩みの相談</p>
              </div>
              <div class="col-4">
                <div class="p-open__open_chat__icon"></div><p class="p-open__open_chat_title">気軽に相談</p>
              </div>
              <div class="click"><a href="#">もっと見る...Click here</a></div><br>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  