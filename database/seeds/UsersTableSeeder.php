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
            'password' => Hash::make('okano2345'),
        ];
        DB::table('users')->insert($param);
    }
}
