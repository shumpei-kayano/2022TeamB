<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guerded = array('id');

    public static $rules = array(

        'category_name' => 'required',

    );
    // public function event()
    // {
    //     return $this->belongsTo('App\Event', 'id', 'category_id');
    // }
    // public function getData()
    // {
    //     return $this->category_name;
    // }
}
