<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
        'message' => 'max:5000|required',
        // 'chat_image' => 'required',
        // 'developer_id' => 'required',
        // 'delet_flag' => 'required',
    );

    // getDataは残しておく
    public function getData()
    {
    }

    public function chatroom()
    {
        return $this->belongsTo('App\Model\chatroom');
    }

    public function user()
    {
        return $this->hasOne('App\Models\user', 'id', 'user_id');
    }
}
