<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert(
            ['buyer_id' => '1',
             'user_id' => '1',
             'transaction_date' => '2022-04-17 06:44:22',
        ]);
    }
}
