<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('events')->delete();


        $data[] =
            [
                'user_id' => 1,
                'event_title' => 'イベントタイトル',
                'event_detail' => 'イベント詳細文章',
                'deadline' => now(),
                'city' => 1,
                'date_of_event' => now(),
                'end_time' => now(),
                'event_image' => 'noimage.jpg',
                'publish_flag' => 1,
                'category_id' => 1,
                'user_cl' => 0,
                'url' => 'http://localhost/'
            ];
        DB::table('events')->insert($data);
    }
}
