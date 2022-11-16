<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Public_user extends Model
{
    protected $guerded = array('id');

    public static $rules = array(

        'facility_name' => 'required|max:50',
        'password' => 'required',
        'email' => 'email|required|max:256',
        'public_email' => 'email|required|max:256',
        'phone_number' => 'max:13',
        'postalcode' => 'max:8',
        'city' => 'max:10',
        'address1' => 'max:256',
        'address2' => 'max:256',
        'auth_code' => 'integer|required',
        'createdate' => 'required',
        'self_introduction' => 'max:256',
        'icon' => 'image',
        'evaluation' => 'integer',

    );
}
