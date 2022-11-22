<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    // protected $guerded = array('id');  //ブラックリスト方式:書き込みを禁止したいカラム名を設定
    protected $fillable = array(          //ホワイトリスト方式:保存したいカラム名を設定
        'user_id', 'facility_id', 'event_title', 'event_detail', 'city',
        'date_of_event', 'end_time', 'event_image', 'publish_flag', 'updated_at', 'created_at'
    );
    public static $rules = [
        'user_id' => 'max:15|exists:users,id',
        'facility_id' => 'max:15|exists:public_users,id',
        'event_title' => 'required|max:100',
        'event_detail' => 'max:1000',
        'city' => 'required|exists:areas,id',
        'date_of_event' => 'required',
        'end_time' => 'required',
        'event_image' => 'image',
        'publish_flag' => 'integer'
    ];

    public function getDate()
    {
        return $this->date_of_event;
    }

    /** @var array Datetime型として扱うカラム */
    protected $dates = [
        'date_of_event',
        'end_time',
    ];

    // 新規作成メソッド
    public static function eventInsert(Request $request)
    {
        $event = new Event;
        $event->event_title = $request->event_title;
        $event->event_detail = $request->event_detail;
        $event->city = $request->city;
        $event->date_of_event = $request->date_of_event = date('Y-m-d H:i:s');
        $event->end_time = $request->end_time = date('Y-m-d H:i:s');
        $event->event_image = $request->event_image;
        $event->publish_flag = $request->publish_flag;

        $event->save();
    }
}
