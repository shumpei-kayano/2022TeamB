<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    // protected $guerded = array('id');  //ブラックリスト方式:書き込みを禁止したいカラム名を設定
    protected $fillable = array(          //ホワイトリスト方式:保存したいカラム名を設定
        'user_id', 'facility_id', 'event_title', 'event_detail', 'city', 'url',
        'date_of_event', 'end_time', 'event_image', 'publish_flag', 'user_cl',
        'updated_at', 'created_at'
    );
    public static $rules = [
        'user_id' => 'max:15|exists:users,id',
        'facility_id' => 'max:15|exists:public_users,id',
        'event_title' => 'required|max:100',
        'event_detail' => 'max:1000',
        'city' => 'required|exists:areas,id',
        'date_of_event' => 'required',
        'end_time' => 'required',
        // 'event_image' => 'image',  //ファイルのパスなのでimageはダメ
        'publish_flag' => 'integer',
        'category_id' => 'required|exists:categories,id'
    ];

    public function area()
    {
        return $this->hasOne('App\Area', 'id', 'city');
    }
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    /** @var array Datetime型として扱うカラム */
    // protected $dates = [
    //     'date_of_event',
    //     'end_time',
    // ];
    // https://inouelog.com/laravel-time-display/ ↑substr($,0,10)で表示

    // 新規作成メソッド（保存）
    public static function eventInsert0(Request $request)
    {
        // 参考 https://migisanblog.com/laravel-image-upload-view/#index_id3
        // 参考 https://qiita.com/Charry/items/11d55ab7b1451f68d056
        // 画像のfileをstorageに,file名をDBに保存してから
        $file = $request->file('event_image');
        if (!empty($file)) {  // 画像がある時
            $dir = 'eimg'; // imageディレクトリ名
            $file_name = $file->getClientOriginalName(); // アップロードされたファイル名を取得
            $path = $file->storeAs('public/' . $dir, $file_name); // 指定したディレクトリに画像を保存
            $filename = basename($path);  // パスからファイル名部分だけ取得
        } else {
            $filename = "noimage.jpg"; // 画像がない時
        }
        // データベースに保存
        $events = new Event;
        $events->event_title = $request->event_title;
        $events->event_detail = $request->event_detail;
        $events->city = $request->city;
        $events->url = $request->url;
        $events->date_of_event = $request->date_of_event;
        $events->end_time = $request->end_time;
        $events->event_image = $filename;  //filename
        $events->publish_flag = '0';  //公開しないフラグ
        $events->category_id = $request->category_id;
        $events->user_id = $request->user()->id;
        $events->user_cl = $request->user()->publish_flag;
        $events->save();
    }
    // 新規作成メソッド（公開）//画像のfileをstorageに,file名をDBに保存してから
    public static function eventInsert1(Request $request)
    {
        $file = $request->file('event_image');
        if (!empty($file)) {
            $dir = 'eimg';
            // $file_name = $file->getClientOriginalName();
            $path = $file->store('public/' . $dir);
            $filename = basename($path);
        } else {
            $filename = "noimage.jpg";
        }
        // データベースに保存
        $events = new Event;
        $events->event_title = $request->event_title;
        $events->event_detail = $request->event_detail;
        $events->city = $request->city;
        $events->url = $request->url;
        $events->date_of_event = $request->date_of_event;
        $events->end_time = $request->end_time;
        $events->event_image = $filename;
        $events->publish_flag = '1';  //公開するフラグ
        $events->category_id = $request->category_id;
        $events->user_id = $request->user()->id;  //ユーザIDをeventに保存
        $events->user_cl = $request->user()->publish_flag;  //ユーザ種別をeventに保存
        $events->save();
    }
    // 更新メソッド
    public static function eventUpdate(Request $request)
    {
        $events = Event::find($request->id);

        $file = $request->file('event_image');
        if (!empty($file)) {    //DBに新しいファイルを保存
            $dir = 'eimg';
            // $file_name = $file->getClientOriginalName();
            $path = $file->store('public/' . $dir);
            $filename = basename($path);
        } else {   //更新しないとき前の画像をそのまま入れる
            $filename = $events->event_image;
        }
        $events->event_title = $request->event_title;
        $events->event_detail = $request->event_detail;
        $events->city = $request->city;
        $events->url = $request->url;
        $events->date_of_event = $request->date_of_event;
        $events->end_time = $request->end_time;
        $events->event_image = $filename;  //filename
        $events->category_id = $request->category_id;
        $events->save();
    }
    // users user_id(Event)=id(User) 
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    // イベント投稿した人のuser_idを取得
    public function getUserName()
    {
        return $this->user->name;
    }
    // イベント投稿した人のiconを取得
    public function getUserIcon()
    {
        return $this->user->icon;
    }



    // guests 
    public function guests()
    {
        return $this->hasMany('App\Models\Guest');
    }
}
