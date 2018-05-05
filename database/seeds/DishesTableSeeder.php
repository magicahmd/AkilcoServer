<?php

use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dishes')->insert([
                [
                    'name' => 'Pepperoni Lovers',
                    'menu_id' => '1',
                ],
                [
                    'name' => 'Supreme',
                    'menu_id' => '1',
                ],
                [
                    'name' => 'BBQ Bacan',
                    'menu_id' => '1',
                ],
                [
                    'name' => 'Italian Meatball',
                    'menu_id' => '1',
                ],
                [
                    'name' => "Meat Lovers",
                    'menu_id' => '1',
                ],

            ]
        );

    }
}
