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
            'Generic Name' => 'fentanil',
            'Form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'Restriction Formula' => '5 amp/kasus.',
            'Description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 1,
            'img_path' => 'medicine/faerie.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'fentanil',
            'Form' => 'patch 12,5 mcg/jam',
            'Restriction Formula' => '10 patch/bulan.',
            'Description' => 'patch: - Untuk nyeri kronik pada pasien kanker yang tidak terkendali.  - Tidak untuk nyeri akut.',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 1,
            'img_path' => 'medicine/salve.jpg'
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'fentanil',
            'Form' => 'patch 25 mcg/jam',
            'Restriction Formula' => '10 patch/bulan.',
            'Description' => 'patch: - Untuk nyeri kronik pada pasien kanker yang tidak terkendali.  - Tidak untuk nyeri akut.',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 1,
            'img_path' => 'medicine/tango.jpg'
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'asam mefenamat',
            'Form' => 'kaps 250 mg ',
            'Restriction Formula' => '30 kaps/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 2
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'asam mefenamat',
            'Form' => 'tab 500 mg ',
            'Restriction Formula' => '30 tab/bulan.',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 2
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'ibuprofen',
            'Form' => 'tab 200 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 2
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'alopurinol',
            'Description' => 'Tidak diberikan pada saat nyeri akut.',
            'Form' => 'tab 100 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 3
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'alopurinol',
            'Description' => 'Tidak diberikan pada saat nyeri akut.',
            'Form' => 'tab 300 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 3
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'kolkisin',
            'Description' => 'Tidak diberikan pada saat nyeri akut.',
            'Form' => 'tab 100 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 3
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'amitriptilin',
            'Form' => 'tab 25 mg',
            'Restriction Formula' => '30 tab/bulan',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 4
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'gabapentin',
            'Description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'Form' => 'kaps 100mg',
            'Restriction Formula' => '60 kaps/bulan',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 4
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'gabapentin',
            'Description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'Form' => 'kaps 300mg',
            'Restriction Formula' => '30 kaps/bulan',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 4
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'bupivakain',
            'Form' => 'inj 0,5%',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 5
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'bupivakain heavy',
            'Description' => 'Khusus untuk analgesia spinal.',
            'Form' => 'inj 0,5% + glukosa 8% ',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 5
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'etil klorida',
            'Form' => 'spray 100mL',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 5
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'deksmedetomidin',
            'Description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'Form' => 'inj 100 mcg/mL',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 6
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'desfluran',
            'Form' => 'ih',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 6
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'halotan',
            'Description' => 'Tidak boleh digunakan berulang. Tidak untuk pasien dengan gangguan fungsi hati.',
            'Form' => 'ih',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 6
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'atropin',
            'Form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 7
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'diazepam',
            'Form' => 'inj 5 mg/mL',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 7
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'midazolam',
            'Description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum', 'Form' => 'inj 100 mcg/mL',
            'Restriction Formula' => '1 mg/jam (24
mg/hari).
- Dosis premedikasi:
8 vial/kasus',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 7
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'deksametason',
            'Restriction Formula' => '20 mg/hari',
            'Form' => 'inj 5 mg/mL',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 8
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'difenhidramin',
            'Restriction Formula' => '30 mg/hari.',
            'Form' => 'inj 10 mg/mL (i.v./i.m.) ',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 8
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'epinefrin (adrenalin)',
            'Form' => 'inj 1 mg/mL',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 8
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'atropin',
            'Form' => 'tab 0,5 mg ',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 9
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'atropin',
            'Form' => 'inj 0,25 mg/mL (i.v.)',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 9
        ]);
        DB::table('medicines')->insert([
            'Generic Name' => 'efedrin',
            'Form' => 'inj 10% ',
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 9
        ]);

        DB::table('medicines')->insert([
            'Generic Name' => 'magnesium sulfat',
            'Form' => 'serb',
            'Faskes TK1' => true,
            'Faskes TK2' => true,
            'Faskes TK3' => true,
            'Category' => 10
        ]);
    }
}
