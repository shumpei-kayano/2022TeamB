<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guerded = array('id');
    public static $rules = array(
        'user_id' => 'required|exists:users,id',
        'facility_id' => 'required|exists:public_users,id',
        'event_title' => 'required',
        'event_detail' => 'required',
        'deadline' => 'required',
        'city' => 'required',
        'date_of_event' => 'required',
        'end_time' => 'required',
        'event_image' => 'required',



    );
    public function getData()
    {
        return $this->id . ':' . $this->event_title;
    }
}
