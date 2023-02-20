<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
           [
               'name'=>'User 1',
               'email'=>'user1@gmail.com',
               'password'=>'11111111',
               'email_verified_at'=>now(),
               'address'=>'via lorem ipsum',
               'role'=> 'Admin'

           ],
            [
                'name'=>'User 2',
                'email'=>'user2@gmail.com',
                'password'=>'11111111',
                'email_verified_at'=>now(),
                'address'=>'via lorem ipsum',
                'role'=> 'Staff'
            ],
            [
                'name'=>'User 3',
                'email'=>'user3@gmail.com',
                'password'=>'11111111',
                'email_verified_at'=>now(),
                'address'=>'via lorem ipsum',
                'role'=> 'Trainer'
            ],
            [
                'name'=>'User 4',
                'email'=>'user4@gmail.com',
                'password'=>'11111111',
                'email_verified_at'=>now(),
                'address'=>'via lorem ipsum',
                'role'=> 'User'
            ],
        ]);
    }
}
