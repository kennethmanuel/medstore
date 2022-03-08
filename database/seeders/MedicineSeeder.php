<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 1,
            'img_path' => 'medicine/faerie.jpg'
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'patch 12,5 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'description' => 'patch: - Untuk nyeri kronik pada pasien kanker yang tidak terkendali.  - Tidak untuk nyeri akut.',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 1,
            'img_path' => 'medicine/salve.jpg'
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'patch 25 mcg/jam',
            'restriction_formula' => '10 patch/bulan.',
            'description' => 'patch: - Untuk nyeri kronik pada pasien kanker yang tidak terkendali.  - Tidak untuk nyeri akut.',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 1,
            'img_path' => 'medicine/tango.jpg'
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'kaps 250 mg ',
            'restriction_formula' => '30 kaps/bulan',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'tab 500 mg ',
            'restriction_formula' => '30 tab/bulan.',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen',
            'form' => 'tab 200 mg',
            'restriction_formula' => '30 tab/bulan',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 2
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'alopurinol',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'form' => 'tab 100 mg',
            'restriction_formula' => '30 tab/bulan',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'alopurinol',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'form' => 'tab 300 mg',
            'restriction_formula' => '30 tab/bulan',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'kolkisin',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'form' => 'tab 100 mg',
            'restriction_formula' => '30 tab/bulan',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 3
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'amitriptilin',
            'form' => 'tab 25 mg',
            'restriction_formula' => '30 tab/bulan',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'gabapentin',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'form' => 'kaps 100mg',
            'restriction_formula' => '60 kaps/bulan',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'gabapentin',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'form' => 'kaps 300mg',
            'restriction_formula' => '30 kaps/bulan',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 4
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain',
            'form' => 'inj 0,5%',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain heavy',
            'description' => 'Khusus untuk analgesia spinal.',
            'form' => 'inj 0,5% + glukosa 8% ',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'etil klorida',
            'form' => 'spray 100mL',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 5
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'deksmedetomidin',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'form' => 'inj 100 mcg/mL',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'desfluran',
            'form' => 'ih',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'halotan',
            'description' => 'Tidak boleh digunakan berulang. Tidak untuk pasien dengan gangguan fungsi hati.',
            'form' => 'ih',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 6
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'midazolam',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum', 'form' => 'inj 100 mcg/mL',
            'restriction_formula' => '1 mg/jam (24 mg/hari).  - Dosis premedikasi: 8 vial/kasus',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 7
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'deksametason',
            'restriction_formula' => '20 mg/hari',
            'form' => 'inj 5 mg/mL',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 8
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'difenhidramin',
            'restriction_formula' => '30 mg/hari.',
            'form' => 'inj 10 mg/mL (i.v./i.m.) ',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'epinefrin (adrenalin)',
            'form' => 'inj 1 mg/mL',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 8
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'tab 0,5 mg ',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v.)',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'efedrin',
            'form' => 'inj 10% ',
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 9
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'magnesium sulfat',
            'form' => 'serb',
            'faskes_tk1' => true,
            'faskes_tk2' => true,
            'faskes_tk3' => true,
            'category' => 10
        ]);
    }
}
