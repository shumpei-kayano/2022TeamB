<?php

namespace App\Http\Controllers;

use App\Chatroom;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;


// チャットのルームを作る
class Chatroomcontroller extends Controller
{
    public function index(Request $request)
    {
        $items = chatroom::all();
        return view('');
    }

    public function add(Request $request)
    {
        $items = Chatroom::all();
        return view('');
    }


    public function create(Request $request)
    {
        $this->validate($request, chatroom::$rules);
        $chatroom = new chatroom();
        $form = $request->all();
        unset($form['_token']);
        $chatroom->fill($form)->save();
        return redirect('/');
    }
}
