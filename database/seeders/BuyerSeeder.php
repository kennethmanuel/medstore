<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buyers')->insert(
            ['name' => 'name1',
             'address' => 'address1',
        ]);
        DB::table('buyers')->insert(
            ['name' => 'name2',
             'address' => 'address2',
        ]);
        DB::table('buyers')->insert(
            ['name' => 'name3',
             'address' => 'address3',
        ]);
    }
}
