<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sizes')->insert([
                [
                    'name' => 'Small',
                ],
                [
                    'name' => 'Medium',
                ],
                [
                    'name' => 'Large',
                ],
                [
                    'name' => '100g',
                ],
                [
                    'name' => '150g',
                ],
                [
                    'name' => '200g',
                ],
            ]
        );

    }
}
