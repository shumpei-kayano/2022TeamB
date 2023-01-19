<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('public_users')->delete();
        for ($i = 1; $i < 101; $i++) {
            $data[] =
                [

                    'facility_name' => '○○市' . $i,
                    'password' => 'pass' . $i,
                    'email' => 'mail' . $i . '@city.jp',
                    'public_email' => 'public_mail' . $i . '@city.jp',
                    'phone_number' => '0975555555',
                    'postalcode' => '8700001',
                    'city' => '大分市',
                    'address1' => '大分市',
                    'address2' => '府内町' . $i,
                    'auth_code' => $i,
                    'createdate' => now(),
                    'self_introduction' => '自己紹介文' . $i,
                    'icon' => 'default.jpg',
                    'evaluation' => 1,

                ];
        }

        for ($i = 1; $i < 21; $i++) {
            $data[] =
                [

                    'facility_name' => '○○店' . $i,
                    'password' => 'pass' . $i,
                    'email' => 'mail' . $i . '@city.jp',
                    'public_email' => 'public_mail' . $i . '@city.jp',
                    'phone_number' => '0975555555',
                    'postalcode' => '8700001',
                    'city' => '大分市',
                    'address1' => '大分市',
                    'address2' => '府内町' . $i,
                    'auth_code' => $i,
                    'createdate' => now(),
                    'self_introduction' => '自己紹介文' . $i,
                    'icon' => 'default.jpg',
                    'evaluation' => 1,

                ];
        }

        DB::table('public_users')->insert($data);
    }
}
