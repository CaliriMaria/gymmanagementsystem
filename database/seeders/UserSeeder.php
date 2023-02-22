<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
               'password'=>Hash::make('11111111'),
               'email_verified_at'=>now(),
               'address'=>'via lorem ipsum',
               'role'=> 'admin'

           ],
            [
                'name'=>'User 2',
                'email'=>'user2@gmail.com',
                'password'=>Hash::make('11111111'),
                'email_verified_at'=>now(),
                'address'=>'via lorem ipsum',
                'role'=> 'staff'
            ],
            [
                'name'=>'User 3',
                'email'=>'user3@gmail.com',
                'password'=>Hash::make('11111111'),
                'email_verified_at'=>now(),
                'address'=>'via lorem ipsum',
                'role'=> 'trainer'
            ],
            [
                'name'=>'User 4',
                'email'=>'user4@gmail.com',
                'password'=>Hash::make('11111111'),
                'email_verified_at'=>now(),
                'address'=>'via lorem ipsum',
                'role'=> 'user'
            ],
        ]);
    }
}
