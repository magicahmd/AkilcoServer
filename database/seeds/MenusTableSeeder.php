<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('menus')->insert([
                [
                    'name' => 'Pizza',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => 'Starter & Slides',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => 'Pasta & Mains',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => 'Desserts',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => 'Drinks',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => 'KidsMenu',
                    'restaurant_id' => '1',
                ],
            ]
        );

    }
}
