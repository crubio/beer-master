<?php

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $users = [
            [
                'username' => 'chris',
                'first_name' => 'arthur',
                'last_name' => 'user',
                'email' => 'crubio23@gmail.com',
                'password' => Hash::make('my_pass')
            ],
        ];

        DB::table('users')->insert($users);
    }
}