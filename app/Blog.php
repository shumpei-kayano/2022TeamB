<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    // protected $guarded = array('id');        //ブラックリスト方式:書き込みを禁止したいカラム名を設定
    protected $fillable = array(                //ホワイトリスト方式:保存したいカラム名を設定
        'user_id',
        'facility_id',
        'title',
        'text',
        'image',
        'created_at',
        'updated_at'
    );

    public static $rules = array(
        'title' => 'required|max:32',
        'text' => 'required',
    );


    //https://qiita.com/yukibe/items/b7186f05d1c266076a35
    //ブログの1つの記事の投稿者は1人しか存在しないので、Blogは1つのUserしか持つことができない。
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
