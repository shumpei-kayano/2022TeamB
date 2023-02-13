<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '岡野哲也',
            'email' => 'okano@tetuya',
            'email_verified_at' => now(),
            'created_at' => now(),
            'self_introduction' => '私は小学校の頃からサッカーを続けており、大学でもサッカー部に所属していました。ポジションはずっとゴールキーパーで、大学時代は守護神と呼ばれていました。
            サッカーでの経験からは、ピッチ全体を後ろから見渡す視野の広さ、状況を観察する冷静さなどを身に付けました。',
            'hobby1' => 'ゲーム',      // hobby1
            'hobby2' => 'スポーツ',    // hobby2
            'hobby3' => '',
            'icon' => 'tetuya.jpg',    // アイコン
            'publish_flag' => 0,      // 個人
            'password' => '$2y$10$x.vJ2UYN45gfWmtM7bunvOZ0CT8x7LFIYI266.a0OWhv3ELPtt/Oe',  //okano2345
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'マシュー',
            'email' => 'm@tthew',
            'email_verified_at' => now(),
            'created_at' => now(),
            'self_introduction' => 'はじめまして！マシューです。
            美容師として働いています。            
            【性格】
            周りからはよくお茶目な人と言われます。本当は陰気な性格です！
            【趣味】
            好きなものはスポーツ観戦とカフェ巡りです！
            休みの日はお菓子作りをして過ごしています?',
            'hobby1' => '音楽',      // hobby1
            'hobby2' => 'スポーツ',  // hobby2
            'hobby3' => '同世代',    // hobby3
            'icon' => 'ringo.png',   // アイコン
            'publish_flag' => 0,     // 個人
            'password' => '$2y$10$XTXsi8QQzEPOcGcBp3/cCuB0Yr5BYR./Z.pWNcHXRRhT53K9nuT5C',  //mmmmmmmm
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '杵築市観光課',
            'email' => 'okano@kitsuki-city.jp',
            'icon' => 'kituki.png',    // アイコン
            'publish_flag' => 1,       // 自治体
            'city' => 5,
            'password' => '$2y$10$fub9lJv4krFcHw/dpwBwpOsunKH.fIGoUtGQtodJsam18f.9mcPou',  //okano2345
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '大分市商工労働部観光課',
            'email' => 'okano@oita-city.jp',
            'icon' => 'oita.png',      // アイコン
            'publish_flag' => 1,       // 自治体
            'city' => 1,
            'password' => '$2y$10$kDQC3j3Gt6tPiT.37Zac9OaF0YQiOrVyydIxF11cN8lW5aOaZYQI.',  //oitaoita
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '岡野商店',
            'email' => 'okano@shouten',
            'icon' => 'iconnin.jpeg', // アイコン
            'publish_flag' => 2,      // 店舗
            'city' => 5,
            'password' => '$2y$10$IZ6MmaN5z1ggU.EZIKZqwu9D7lRwOhX5if/E1eUsI5ju2gSUNEI8u', //okano2345
        ];
        DB::table('users')->insert($param);
    }
}
