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
                    'name' => 'PizzaHutMenu1',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => 'PizzaHutMenu2',
                    'restaurant_id' => '1',
                ],
            ]
        );

    }
}
