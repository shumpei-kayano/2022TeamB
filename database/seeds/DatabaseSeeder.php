<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(EventsTableSeeder::class);
        $this->call(PublicUsersTableSeeder::class);
        // $this->call(AreasTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
    }
}
