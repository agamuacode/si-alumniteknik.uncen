<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wilayah;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama_wilayah' => 'Fakultas Teknik',
                'kode_wilayah' => '12345',
            ],
            [
                'nama_wilayah' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam (MIPA)',
                'kode_wilayah' => '2324',
            ],
            [
                'nama_wilayah' => 'Fakultas Ekonomi & Bisnis',
                'kode_wilayah' => '2325',
            ],

        ])->each(function ($items) {
            Wilayah::create($items);
        });
    }
}
