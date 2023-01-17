<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $guerded = array('id');

    public static $rules = array(

        'city' => 'required',

    );

    // public function getData()
    // {
    //     return $this->city;
    // }

    // public function event()
    // {
    //     return $this->belongsTo('App\Event', 'id', 'city');
    // }
}
