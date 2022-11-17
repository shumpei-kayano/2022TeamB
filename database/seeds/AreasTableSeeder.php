<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->delete();


        $data =
            [
                'city' => '大分市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '別府市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '日田市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '津久見市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '杵築市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '由布市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '日出町',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '佐伯市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '竹田市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '宇佐市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '国東市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '九重町',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '中津市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '臼杵市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '豊後高田市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '豊後大野市',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '姫島村',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);

        $data =
            [
                'city' => '玖珠町',
                'created_at' => now(),
            ];
        DB::table('areas')->insert($data);
    }
}
