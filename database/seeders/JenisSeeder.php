<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jenis;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
            'jenis' => 'ktp',
        ]);

        Jenis::create([
            'jenis' => 'kia',
        ]);

        Jenis::create([
            'jenis' => 'kk',
        ]);

        Jenis::create([
            'jenis' => 'akta_kelahiran',
        ]);

        Jenis::create([
            'jenis' => 'akta_kematian',
        ]);
    }
}
