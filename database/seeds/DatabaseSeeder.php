<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\UserSeeder::class);
        $this->call(\AdminSeeder::class);
        $this->call(\PostSeeder::class);

        #run :composer dump-autoload

        //php artisan db:seed ->loads all DatabaseSeeder

        //php artisan db:seed --class=UsersTableSeeder ->Loads specific seeder
    }
}
