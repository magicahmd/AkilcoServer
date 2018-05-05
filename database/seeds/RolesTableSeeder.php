<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
                [
                    'id' => '1',
                    'name' => 'Client',
                ],
                [
                    'id' => '2',
                    'name' => 'Manager',
                ],
                [
                    'id' => '3',
                    'name' => 'Waiter',
                ],
                [
                    'id' => '4',
                    'name' => 'Chef',
                ],
            ]
        );

    }
}
