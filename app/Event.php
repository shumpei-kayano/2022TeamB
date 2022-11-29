<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    // protected $guerded = array('id');  //ブラックリスト方式:書き込みを禁止したいカラム名を設定
    protected $fillable = array(          //ホワイトリスト方式:保存したいカラム名を設定
        'user_id', 'facility_id', 'event_title', 'event_detail', 'city', 'url',
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

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    /** @var array Datetime型として扱うカラム */
    protected $dates = [
        'date_of_event',
        'end_time',
    ];

    // 新規作成メソッド・画像のfile,ファイル名をDBに保存する
    public static function eventInsert(Request $request)
    {
        // 参考 https://migisanblog.com/laravel-image-upload-view/#index_id3
        // 参考 https://qiita.com/Charry/items/11d55ab7b1451f68d056

        // if (!empty($request->event_image)) {
        // imageディレクトリ名
        $dir = 'eimg';
        // アップロードされたファイル名を取得
        $file_name = $request->file('event_image')->getClientOriginalName();
        // dd($file_name);
        // 指定したディレクトリに画像を保存
        $path = $request->file('event_image')->storeAs('public/' . $dir, $file_name);
        // パスから、最後の「ファイル名.拡張子」の部分だけ取得 例)sample.jpg
        $filename = basename($path);
        // } else {
        //     $dir = 'eimg';
        //     $file_name = 'noimage.jpg';
        //     $path = $request->file('event_image')->storeAs('public/' . $dir, $file_name);
        //     $filename = basename($path);
        // }
        // データベースに保存
        $events = new Event;
        $events->event_title = $request->event_title;
        $events->event_detail = $request->event_detail;
        $events->city = $request->city;
        $events->url = $request->url;
        $events->date_of_event = $request->date_of_event = date('Y-m-d H:i:s');
        $events->end_time = $request->end_time = date('Y-m-d H:i:s');
        $events->event_image = $filename;  //filename
        $events->publish_flag = $request->publish_flag;

        $events->save();
    }
}
