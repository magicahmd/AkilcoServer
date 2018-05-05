<?php

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tables')->insert([
                [
                    'name' => '1',
                    'seats_no' => '4',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => '2',
                    'seats_no' => '4',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => '3',
                    'seats_no' => '2',
                    'restaurant_id' => '1',
                ],
                [
                    'name' => '1',
                    'seats_no' => '6',
                    'restaurant_id' => '2',
                ],
                [
                    'name' => '2',
                    'seats_no' => '6',
                    'restaurant_id' => '2',
                ],

            ]
        );

    }
}
