<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
                [
                    'name' => 'Ahmad',
                    'email' => 'ahmd@gmail.com',
                    'password' => md5('123456'),
                    'phone_no' => '0547425208'
                ],

                [
                    'name' => 'Ritaj',
                    'email' => 'Ritaj@gmail.com',
                    'password' => md5('123456'),
                    'phone_no' => '0547425208'
                ],

                [
                    'name' => 'waiter',
                    'email' => 'waiter@gmail.com',
                    'password' => md5('123456'),
                    'phone_no' => '0547425208'
                ],

                [
                    'name' => 'waiter2',
                    'email' => 'waiter2@gmail.com',
                    'password' => md5('123456'),
                    'phone_no' => '0547425208'
                ],

                [
                    'name' => 'waiter3',
                    'email' => 'waiter3@gmail.com',
                    'password' => md5('123456'),
                    'phone_no' => '0547425208'
                ],

                [
                    'name' => 'client',
                    'email' => 'client@gmail.com',
                    'password' => md5('123456'),
                    'phone_no' => '0547425208'
                ],

            ]
        );

    }
}
