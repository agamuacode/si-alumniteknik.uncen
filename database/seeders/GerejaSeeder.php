<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gereja;

class GerejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama_gereja' => 'Teknik Sipil',
                // 'nama_pengguna' => 'gereja_baptis_kiwone',
                // 'kata_sandi' => bcrypt('gereja_baptis_kiwone'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Teknik Pertambangan',
                // 'nama_pengguna' => 'gereja_baptis_waena',
                // 'kata_sandi' => bcrypt('gereja_baptis_waena'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Teknik Elktro',
                // 'nama_pengguna' => 'gereja_baptis_kamkey',
                // 'kata_sandi' => bcrypt('gereja_baptis_kamkey'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Teknik Mesin',
                // 'nama_pengguna' => 'gereja_baptis_bukit_zaitun_skyland',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Teknik Perencanaan Wilayah dan Kota',
                // 'nama_pengguna' => 'gereja_baptis_siloam_buper',
                // 'kata_sandi' => bcrypt('gereja_baptis_siloam_buper'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Matematika',
                // 'nama_pengguna' => 'gereja_baptis_bukit_pengharapan_waena',
                // 'kata_sandi' => bcrypt('gereja_baptis_bukit_pengharapan_waena'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Sistem Informasi',
                // 'nama_pengguna' => 'gereja_baptis_tiranus_kota_raya',
                // 'kata_sandi' => bcrypt('gereja_baptis_tiranus_kota_raya'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Biologi',
                // 'nama_pengguna' => 'gereja_baptis_btn_kota_raya',
                // 'kata_sandi' => bcrypt('gereja_baptis_btn_kota_raya'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Kimia',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Farmasi',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Fisika',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Stastistika',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => '  Kelautan',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Perikanan',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Geofisika ',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Ilmu Ekonomi',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => ' Manajemen',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Akuntansi',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Studi Ekonomi Pembangunan (S1) ',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Magister Ilmu Ekonomi (S2) ',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Doktor Ilmu Ekonomi (S3) ',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Studi Manajemen (S1) ',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 1, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => ' Program Magister Manajemen (S2)',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Doktor Manajemen (S3)',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Studi Akuntansi (S1)',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Magister Akuntansi (S2)',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 2, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Profesi Akuntan',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 3, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Studi Teknik Geofisika (S1)',
                // 'nama_pengguna' => 'gereja_baptis_',
                // 'kata_sandi' => bcrypt('gereja_baptis_'),
                'wilayah_id' => 3, // lihat id kota/kab di WilayahSeeder

            ],
            [
                'nama_gereja' => 'Program Studi Ilmu Komputer',
                // 'nama_pengguna' => 'gereja_baptis_sumahai',
                // 'kata_sandi' => bcrypt('gereja_baptis_sumahai'),
                'wilayah_id' => 3, // lihat id kota/kab di WilayahSeeder

            ],

        ])->each(function ($item) {
            Gereja::create($item);
        });
    }
}
