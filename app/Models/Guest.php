<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Guest extends Model
{
    // protected $guerded = array('id');     //ブラックリスト方式:書き込みを禁止したいカラム名を設定
    protected $fillable = array(          //ホワイトリスト方式:保存したいカラム名を設定
        'event_id', 'user_id', 'facility_id',
        'created_at', 'updated_at'
    );
    public static $rules = array(

        'event_id' => 'required',

    );

    // 参加を押した時にデータベースに保存
    public static function guestInsert(Request $request, $id)
    {
        $guests = new Guest;
        $guests->user_id = $request->user()->id;
        $guests->event_id = $id;

        $guests->save();
    }

    // イベント投稿したらゲストテーブルに保存
    public static function userInsert(Request $request, $id)
    {
        $guests = new Guest;
        $guests->user_id = $request->user()->id;
        $guests->event_id = $request->id;

        $guests->save();
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
