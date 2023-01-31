<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Guest extends Model
{
    protected $guerded = array('id');

    public static $rules = array(

        'event_id' => 'required',

    );

    // データベースに保存
    public static function guestInsert(Request $request)
    {
        $guests = new Guest;
        $guests->user_id = $request->user()->id;
        $guests->event_id = $request->event_id;

        $guests->save();
    }
}
