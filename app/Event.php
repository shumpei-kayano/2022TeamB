<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guerded = array('id');

    public static $rules = array(
        'user_id' => 'required|max:15|exists:users,id',
        'facility_id' => 'required|max:15|exists:public_users,id',
        'event_title' => 'required|max:100',
        'event_detail' => 'required|max:1000',
        'deadline' => 'required',
        'city' => 'required|max:20',
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
