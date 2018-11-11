<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1'),
            'birth_date' => Carbon::create(1992, 12, 21, 0, 0, 0),
            'expiry_date' => Carbon::create(2018, 11, 15, 0, 0, 0),
            'state' => True
        ]);
       DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('user2'),
            'birth_date' => Carbon::create(1992, 12, 21, 0, 0, 0),
            'expiry_date' => Carbon::create(2018, 11, 07, 0, 0, 0),
            'state' => True
        ]);
       DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('user3'),
            'birth_date' => Carbon::create(1992, 12, 21, 0, 0, 0),
            'expiry_date' => Carbon::create(2018, 11, 05, 0, 0, 0),
            'state' => False
        ]);
       DB::table('users')->insert([
            'name' => 'user4',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('user4'),
            'birth_date' => Carbon::create(1992, 12, 21, 0, 0, 0),
            'expiry_date' => Carbon::create(2018, 11, 11, 0, 0, 0),
            'state' => True
        ]);
    }
}
