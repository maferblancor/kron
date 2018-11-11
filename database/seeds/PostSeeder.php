<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Post 1 title',
            'content' =>	'To cut through some of the confusion surrounding bitcoin, we need to separate it into two components. On the one hand, you have bitcoin-the-token, a snippet of code that represents ownership of a digital concept – sort of like a virtual IOU. On the other hand, you have bitcoin-the-protocol, a distributed network that maintains a ledger of balances of bitcoin-the-token. Both are referred to as bitcoin. The system enables payments to be sent between users without passing through a central authority, such as a bank or payment gateway. It is created and held electronically.',

            'images' => 'https://www.vivus.es/blog/wp-content/uploads/2018/07/Bitcoin-612x378.jpeg',
            'video' => asset('assets/videos/1.mp4'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 2 title',
            'content' =>	'To cut through some of the confusion surrounding bitcoin, we need to separate it into two components. On the one hand, you have bitcoin-the-token, a snippet of code that represents ownership of a digital concept – sort of like a virtual IOU. On the other hand, you have bitcoin-the-protocol, a distributed network that maintains a ledger of balances of bitcoin-the-token. Both are referred to as bitcoin. The system enables payments to be sent between users without passing through a central authority, such as a bank or payment gateway. It is created and held electronically.',
            'images' => asset('assets/images/1.jpeg'),
            'video' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 3 title',
            'content' =>	'To cut through some of the confusion surrounding bitcoin, we need to separate it into two components. On the one hand, you have bitcoin-the-token, a snippet of code that represents ownership of a digital concept – sort of like a virtual IOU. On the other hand, you have bitcoin-the-protocol, a distributed network that maintains a ledger of balances of bitcoin-the-token. Both are referred to as bitcoin. The system enables payments to be sent between users without passing through a central authority, such as a bank or payment gateway. It is created and held electronically.',
            'images' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 3 title',
            'content' =>	'To cut through some of the confusion surrounding bitcoin, we need to separate it into two components. On the one hand, you have bitcoin-the-token, a snippet of code that represents ownership of a digital concept – sort of like a virtual IOU. On the other hand, you have bitcoin-the-protocol, a distributed network that maintains a ledger of balances of bitcoin-the-token. Both are referred to as bitcoin. The system enables payments to be sent between users without passing through a central authority, such as a bank or payment gateway. It is created and held electronically.  ',
            'images' => '',
            'video' => asset('assets/videos/1.mp4'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('posts')->insert([
            'title' => 'Post 4 title',
            'content' =>    'To cut through some of the confusion surrounding bitcoin, we need to separate it into two components. On the one hand, you have bitcoin-the-token, a snippet of code that represents ownership of a digital concept – sort of like a virtual IOU. On the other hand, you have bitcoin-the-protocol, a distributed network that maintains a ledger of balances of bitcoin-the-token. Both are referred to as bitcoin. The system enables payments to be sent between users without passing through a central authority, such as a bank or payment gateway. It is created and held electronically.  ',
            'images' => '',
            'video' => asset('assets/videos/1.mp4') ,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        

    }
}


