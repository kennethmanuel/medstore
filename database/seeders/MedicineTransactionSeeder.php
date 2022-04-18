<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => '1',
             'transaction_id' => '1',
             'quantity' => '100',
        ]);
    }
}
