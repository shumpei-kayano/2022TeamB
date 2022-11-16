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


        $data[] =
            [
                'city' => '大分市',


            ];


        DB::table('areas')->insert($data);
    }
}
