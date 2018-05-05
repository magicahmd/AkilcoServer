<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
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
                    'id' => '1',
                    'name' => 'Pizza Hut',
                    'address' => 'Ramallah',
                    'restaurant_logo' => 'pizzaHut',
                ],
                [

                    'id' => '2',
                    'name' => 'KFC',
                    'address' => 'Ramallah',
                    'restaurant_logo' => 'kfc',
                ],

            ]
        );

    }
}
