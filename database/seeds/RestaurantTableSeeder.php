<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('restaurants')->insert([
            [

                'name' => 'Pizza Hut',
                'address' => 'Ramallah',
                'restaurant_logo' => 'Pizza_Hut',
            ],

            ]
        );

    }
}
