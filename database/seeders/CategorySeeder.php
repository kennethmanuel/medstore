<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listCategory = [
            'ANALGESNALGESIK NARKOTIK',
            'ANALGESIK NON NARKOTIK',
            'ANTIPIRAI',
            'NYERI NEUROPATIK',
            'ANESTETIK LOKAL',
            'ANESTETIK UMUM dan OKSIGEN',
            'OBAT untuk PROSEDUR PRE OPERATIF',
            'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'ANTIDOT KHUSUS',
            'ANTIDOT UMUM',
        ];

        foreach ($listCategory as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
