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
        factory(App\User::class,5)->create();
        // $this->call(UsersTableSeeder::class);
        factory(App\Product::class,50)->create();
        factory(App\Review::class,300)->create();
    }
}
