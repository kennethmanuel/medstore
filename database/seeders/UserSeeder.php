<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['name' => 'user1',
             'email' => 'email1',
             'password' => 'abc123'
        ]);
        DB::table('users')->insert(
            ['name' => 'user2',
             'email' => 'email2',
             'password' => 'abc123'
        ]);
        DB::table('users')->insert(
            ['name' => 'user3',
             'email' => 'email3',
             'password' => 'abc123'
        ]);
    }
}
