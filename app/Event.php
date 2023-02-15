<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;

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
    public static function addEventCalendar(Request $request)
    {
        // Google API クライアントの初期化
        $client = new Google_Client();
        $client->setApplicationName('GoogleCalendarAPIのテスト');
        $client->setScopes(Google_Service_Calendar::CALENDAR_EVENTS);
        $client->setAuthConfig(storage_path('app/api-key/calender-api-test-376003-53e5486ef712.json'));
        $client->setAccessType('offline');
        // Google サービスの初期化
        $service = new Google_Service_Calendar($client);
        // Google カレンダーに追加するイベントの情報を設定
        $event = new Google_Service_Calendar_Event;
        $event->summary = $request->get('event_title');
        $startDate = $request->date_of_event;
        $startDate2 = $startDate . ':00+09:00';
        $endDate = $request->end_time;
        $endDate2 = $endDate . ':00+09:00';
        $event->start = array(
            // 'dateTime' => '2023-02-17T10:00:00+09:00',
            // "date_of_event" => "2023-02-16T15:23"

            'dateTime' => $startDate2,
            'timeZone' => 'Asia/Tokyo',
        );
        $event->end =  array(
            'dateTime' => $endDate2,
            'timeZone' => 'Asia/Tokyo',
        );
        // カレンダーの ID を指定し、イベントを追加
        $calendarId = '287c89bb6ebc5188bb0488b9e9e8a34c2451cf5ce97f1664ce2d8cac5ff76b4f@group.calendar.google.com';
        $event = $service->events->insert($calendarId, $event);
        // レスポンスを JSON 形式で返す
        return response()->json([
            'message' => 'Event added to Google Calendar',
            'eventId' => $event->id,
        ]);
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
// "open" => "公開"
// "_token" => "waC4NqvQAm3OkGHTyU4r66cq0MlXLinrgH0YL025"
// "event_title" => "dsfa"
// "category_id" => "16"
// "city" => "18"
// "date_of_event" => "2023-02-16T15:23"
// "end_time" => "2023-03-02T15:23"
// "url" => null
// "event_detail" => null