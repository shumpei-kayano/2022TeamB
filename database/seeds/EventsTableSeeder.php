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

        for ($i = 0; $i < 10; $i++) {
            $data[] =
                [
                    'user_id' => $i,
                    // 'facility_id' => $i,
                    'event_title' => 'イベントタイトル' . $i,
                    'event_detail' => 'イベント詳細文章' . $i,
                    'deadline' => now(),
                    'city' => $i,
                    'date_of_event' => now(),
                    'end_time' => now(),
                    'event_image' => 'noimage.jpg',
                    'publish_flag' => 1,
                    'category_id' => $i
                ];
        }

        DB::table('events')->insert($data);
    }
}
