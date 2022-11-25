<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'room_detail' => 'required',
        // 'category_id' => 'required',
        // 'chat_image' => 'required',
        // 'developer_id' => 'required',
        // 'delet_flag' => 'required',
    );

    // getDataは残しておく
    public function getData()
    {
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
