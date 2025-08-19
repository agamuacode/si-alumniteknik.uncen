<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
use Illuminate\Support\Carbon;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'id' => 1,
                'judul' => 'Info Judisium Fakultas Teknik',
                'keterangan' => 'Shalom Bapak Ibu Terkasih Dalam Tuhan Yesus Kristus. 
Kami Dari Keluarga Besar Alumni Fakultas Teknik Menyampaikan Selamat Buat Judisium angakat 24 
Dilingkungan Kampus Universitas Cenderawasih.
TUHAN YESUS MEMBERKATI,
Salam Dalam Satu Tuhan – Satu Iman dan Satu Baptisan

UIVERSITAS CENDERAWASIH  – UNCEN – FAKULTAS TEKNIK',
                'mulai' => Carbon::Now(),
                'selesai' => Carbon::Now(),

                // 'gereja_id' => 1,

            ],
            [
                'id' => 2,
                'judul' => 'Pertemuan Keluarga Besar Alumni Fakultas Teknik Uncen.',
                'keterangan' => 'Dalam Rangka Pertemuan Keluarga Besar Alumni Fakultas Teknik Universitas Cenderawasih. 
                Maka Kami Pengurus Alumni Menggundang Semua Alumni Fakultas untuk dapat menghadiri acara kegiatan tersebut. 
Sediahnya akan di laksanakan Pada; 16 November Tahun 2025 
Pukul 10.00 Wit s/d Selesai.
Tempat: Aula Fakultas Teknik Universitas Cenderawasih.',
                'mulai' => Carbon::Now(),
                'selesai' => Carbon::Now(),
                // 'gereja_id' => 2,
            ]
        ])->each(function ($collection) {
            Pengumuman::create($collection);
        });
    }
}
