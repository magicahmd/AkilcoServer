<?php

use Illuminate\Database\Seeder;

class DishSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dish_size')->insert([
                [
                    'dish_id' => '1',
                    'size_id' => '1',
                    'price' => '20',
                ],
                [
                    'dish_id' => '1',
                    'size_id' => '3',
                    'price' => '30',
                ],
                [
                    'dish_id' => '2',
                    'size_id' => '1',
                    'price' => '20',
                ],
                [
                    'dish_id' => '2',
                    'size_id' => '3',
                    'price' => '30',
                ],


                [
                    'dish_id' => '3',
                    'size_id' => '1',
                    'price' => '20',
                ],
                [
                    'dish_id' => '3',
                    'size_id' => '3',
                    'price' => '30',
                ],
                [
                    'dish_id' => '4',
                    'size_id' => '1',
                    'price' => '20',
                ],
                [
                    'dish_id' => '4',
                    'size_id' => '3',
                    'price' => '30',
                ],

                [
                    'dish_id' => '5',
                    'size_id' => '1',
                    'price' => '20',
                ],
                [
                    'dish_id' => '5',
                    'size_id' => '3',
                    'price' => '30',
                ],


            ]
        );

    }
}
