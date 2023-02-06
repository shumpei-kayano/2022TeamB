<?php

namespace App\Http\Controllers;

use App\Models\Chatroom;
use App\Models\Category;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use App\Models\Message;
// use Illuminate\Mail\Message;
use App\Post;

// チャットのルームを作る
class ChatroomController extends Controller
{
    public function index(Request $request)
    {
        $items = chatroom::all();
        return view('', ['msg' => '']);
    }

    public function index_2(Request $request)
    {
        $items = Category::all();
        return view('open_chat.create_new_open', ['items' => $items]);
    }

    public function add(Request $request)
    {
        $items = Chatroom::all();
        return view('');
    }


    public function create(Request $request)
    {
        $this->validate($request, chatroom::$rules);
        // $chatroom = new chatroom();
        // $form = $request->all();
        // $chatroom->developer_id = $request->user()->id;
        // unset($form['_token']);
        // $chatroom->fill($form)->save();
        // $file = $request->file('room_image');
        // if (!empty($file)) {  // 画像がある時
        //     $dir = 'eimg'; // imageディレクトリ名
        //     $file_name = $file->getClientOriginalName(); // アップロードされたファイル名を取得
        //     $path = $file->storeAs('public/' . $dir, $file_name); // 指定したディレクトリに画像を保存
        //     $filename = basename($path);  // パスからファイル名部分だけ取得
        // } else {
        //     $filename = "noimage.jpg"; // 画像がない時
        // }
        //        $chatroom->room_image = $filename;
        // $chatroom = new Chatroom();
        // $form = $request->all();
        // unset($form['_token']);
        // $chatroom->fill($form)->save();
        // $chatroom->developer_id = $request->user()->id;
        // return redirect('/open_chat_list');

        $this->validate($request, chatroom::$rules);
        $chatroom = new chatroom();
        $form = $request->all();
        $chatroom->developer_id = $request->user()->id;
        unset($form['_token']);
        $chatroom->fill($form)->save();
        return redirect('/open_chat_list');
    }

    public function preview_post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => 'こんにちは、' . $msg . 'さん！',
        ];
        return view('open_chat.open_chat_preview', ['msg' => $request->msg]);
    }

    //オープンチャット一覧表示
    public function index3(Request $request)
    {
        $items = chatroom::orderBy('created_at', 'desc')->paginate(4);
        return view('open_chat.open_chat_list', ['items' => $items]);
    }

    //オープンチャットができるページへ
    public function show($id)
    {
        // $data = Post::with('message')->where('id', $id)->first();
        $data = Chatroom::where('id', $id)->first();
        $messages = Message::where('room_id', $id)->orderBy("id")->get();
        $room_id = $id;
        return view('open_chat.open_chat_room', ['room_id' => $room_id, 'messages' => $messages, 'data' => $data]);
    }




    //メッセージを送信
    public function send(Request $request)
    {
        //送信messageの登録処理
        // $this->validate($request, messages:::$rules);
        $message = new Message();
        $form = $request->all();
        // $message->room_id = $request->chatroom()->id;
        $message->user_id = $request->user()->id;
        unset($form['_token']);
        $message->fill($form)->save();
        return redirect('open_chat_room/' . $request->room_id);
    }

    public function index4($id)
    {
        // $data = Post::with('message')->where('id', $id)->first();
        $data = Chatroom::where('id', $id)->first();
        return view('open_chat.join_open_chat')->with(['data' => $data]);
    }

    public function check(Request $request)
    {
        // $data = Post::with('message')->where('id', $id)->first();
        $id = $request->chat_id;
        $data = Chatroom::find($id);
        return view('open_chat.check_close', ['data' => $data, 'id' => $id]);
    }

    public function delete(Request $request)
    {
        $id = $request->chat_id;                                                        //リクエストで送られてきたブログidを受け取り、$idに代入する
        $data = Chatroom::find($id);                                                        //findメソッドで、指定されたidに該当するレコードを取得し、$dataへ代入
        $data->delete();                                                                //deleteメソッドを実行し、内容をDBから削除する
        return redirect('open_chat_list');
    }
}
