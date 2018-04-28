<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(RestaurantTableSeeder::class);
         $this->call(MenusTableSeeder::class);
    }
}

//composer dump
// php artisan migrate:refresh --seed