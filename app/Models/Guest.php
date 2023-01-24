<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guerded = array('id');

    public static $rules = array(

        'event_id' => 'required',

    );
}
