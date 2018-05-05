<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TablesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(DishesTableSeeder::class);
        $this->call(DishSizeTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);

    }
}

//composer dump
// php artisan migrate:refresh --seed