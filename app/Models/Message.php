<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
        'message' => 'max:5000'
    );

    // getDataは残しておく
    public function getData()
    {
    }

    public function chatroom()
    {
        return $this->belongsTo('App\Model\chatroom');
    }
}
