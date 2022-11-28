<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    // protected $guerded = array('id');  //ブラックリスト方式:書き込みを禁止したいカラム名を設定
    protected $fillable = array(          //ホワイトリスト方式:保存したいカラム名を設定
        'user_id', 'facility_id', 'event_title', 'event_detail', 'city',
        'date_of_event', 'end_time', 'event_image', 'publish_flag', 'updated_at', 'created_at'
    );
    public static $rules = [
        'user_id' => 'max:15|exists:users,id',
        'facility_id' => 'max:15|exists:public_users,id',
        'event_title' => 'required|max:100',
        'event_detail' => 'max:1000',
        'city' => 'required|exists:areas,id',
        'date_of_event' => 'required',
        'end_time' => 'required',
        // 'event_image' => 'image',
        'publish_flag' => 'integer'
    ];

    public function getDate()
    {
        return $this->date_of_event;
    }

    /** @var array Datetime型として扱うカラム */
    protected $dates = [
        'date_of_event',
        'end_time',
    ];

    // 新規作成メソッド
    // public static function eventInsert(Request $request)
    // {
    //     $events = new Event;
    //     $events->event_title = $request->event_title;
    //     $events->event_detail = $request->event_detail;
    //     $events->city = $request->city;
    //     $events->date_of_event = $request->date_of_event = date('Y-m-d H:i:s');
    //     $events->end_time = $request->end_time = date('Y-m-d H:i:s');
    //     $events->event_image = $request->event_image;
    //     $events->publish_flag = $request->publish_flag;

    //     $events->save();
    // }
    // 画像のfile,ファイル名をDBに保存する
    public static function imgStore(Request $request)
    {
        // https://migisanblog.com/laravel-image-upload-view/#index_id3
        // imageディレクトリ名
        $dir = 'eimg';
        // アップロードされたファイル名を取得
        $file_name = $request->file('event_image')->getClientOriginalName();
        // dd($file_name);
        // 指定したディレクトリに画像を保存
        $path = $request->file('event_image')->storeAs('public/' . $dir, $file_name);

        // パスから、最後の「ファイル名.拡張子」の部分だけ取得 例)sample.jpg
        $filename = basename($path);

        //  https://qiita.com/Charry/items/11d55ab7b1451f68d056
        // 登録する項目に必要な値を代入
        // $request->event_image = $file_name;

        // データベースに保存
        // $request->save();
        // Event::where('id', $request->id)->update(['event_image' => $filename]);
        $events = new Event;
        $events->event_title = $request->event_title;
        $events->event_detail = $request->event_detail;
        $events->city = $request->city;
        $events->date_of_event = $request->date_of_event = date('Y-m-d H:i:s');
        $events->end_time = $request->end_time = date('Y-m-d H:i:s');
        $events->event_image = $filename;
        $events->publish_flag = $request->publish_flag;

        $events->save();
    }
}
