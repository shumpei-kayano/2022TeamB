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
        'text' => 'required|max:15000',
    );
}
