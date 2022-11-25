{{-- 新着ブログ記事一覧表示 --}}

@extends('layouts.layout')   
@section('title')
    新着ブログ記事一覧表示
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
                <div class="p-blog_edit_area__blog_title">【新着ブログ一覧】</div><br>
                  <div class="p-blog_edit_area__new_blog_post">  
                  <div class="col-12">
                      <div class="d-flex">
                      <div class="p-blog_edit_area__open_chat_list_icon"></div>
                      <div class="p-blog_edit_area__open_chat_list_title">
                        <h5>〇〇市の城下町散策に参加しました</h5>
                        <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="p-blog_edit_area__new_blog_post">  
                    <div class="col-12">
                        <div class="d-flex">
                        <div class="p-blog_edit_area__open_chat_list_icon"></div>
                        <div class="p-blog_edit_area__open_chat_list_title">
                          <h5>〇〇市の城下町散策に参加しました</h5>
                          <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="p-blog_edit_area__new_blog_post">  
                      <div class="col-12">
                          <div class="d-flex">
                          <div class="p-blog_edit_area__open_chat_list_icon"></div>
                          <div class="p-blog_edit_area__open_chat_list_title">
                            <h5>〇〇市の城下町散策に参加しました</h5>
                            <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="p-blog_edit_area__new_blog_post">  
                        <div class="col-12">
                            <div class="d-flex">
                            <div class="p-blog_edit_area__open_chat_list_icon"></div>
                            <div class="p-blog_edit_area__open_chat_list_title">
                              <h5>〇〇市の城下町散策に参加しました</h5>
                              <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </div>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="p-blog_edit_area__new_blog_post">  
                          <div class="col-12">
                              <div class="d-flex">
                              <div class="p-blog_edit_area__open_chat_list_icon"></div>
                              <div class="p-blog_edit_area__open_chat_list_title">
                                <h5>〇〇市の城下町散策に参加しました</h5>
                                <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </div>
                              </div>
                            </div>
                            </div>
                          </div>
                          <div class="p-blog_edit_area__new_blog_post">  
                            <div class="col-12">
                                <div class="d-flex">
                                <div class="p-blog_edit_area__open_chat_list_icon"></div>
                                <div class="p-blog_edit_area__open_chat_list_title">
                                  <h5>〇〇市の城下町散策に参加しました</h5>
                                  <div class="p-blog_edit_area__blog_text_small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam expedita, quod dignissimos consectetur eligendi ex assumenda fuga. Nisi blanditiis deserunt dignissimos </div>
                                </div>
                              </div>
                              </div>
                            </div>
                              
                
            </div>
        </div>
    </div>
</div>
</div>


@endsection