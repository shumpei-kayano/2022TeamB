<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // protected $guerded = array('id');  //ブラックリスト方式:書き込みを禁止したいカラム名を設定
    protected $fillable = array(          //ホワイトリスト方式:保存したいカラム名を設定
        'user_id', 'facility_id', 'event_title', 'event_detail', 'city',
        'date_of_event', 'end_time', 'event_image', 'publish_flag', 'updated_at', 'created_at'
    );
    public static $rules = array(
        'user_id' => 'max:15|exists:users,id',
        'facility_id' => 'max:15|exists:public_users,id',
        'event_title' => 'required|max:100',
        'event_detail' => 'max:1000',
        'city' => 'required|exists:areas,id',
        'date_of_event' => 'required',
        'end_time' => 'required',
        'event_image' => 'image',
        'publish_flag' => 'integer'
    );
    public function getTitle()
    {
        return $this->event_title;
    }
    public function getDate()
    {
        return $this->date_of_event;
    }
}
