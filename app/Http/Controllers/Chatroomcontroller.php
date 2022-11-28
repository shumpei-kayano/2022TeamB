<?php

namespace App\Http\Controllers;

use App\Chatroom;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;


// チャットのルームを作る
class ChatroomController extends Controller
{
    public function index(Request $request)
    {
        $items = chatroom::all();
        return view('', ['msg' => '']);
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
        $chatroom->developer_id = $request->user()->id;
        unset($form['_token']);
        $chatroom->fill($form)->save();
        return redirect('/open_chat_room');
    }

    // public function preview()
    // {
    //     $data = [
    //         'msg' => 'お名前を入力下さい。',
    //     ];
    //     return view('open_chat.open_chat_preview', $data);
    // }

    public function preview_post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => 'こんにちは、' . $msg . 'さん！',
        ];
        return view('open_chat.open_chat_preview', ['msg' => $request->msg]);
    }

    // public function create2(Request $request)
    // {
    //     $this->validate($request, chatroom::$rules);
    //     $chatroom = new chatroom();
    //     $form = $request->all();
    //     unset($form['_token']);
    //     $chatroom->fill($form)->save();
    //     return redirect('/');
    // }
}
