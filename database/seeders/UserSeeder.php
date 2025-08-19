<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        $admin = User::create([
            // 'user' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' =>  bcrypt('admin@gmail.com')
        ]);
        $admin->assignRole('admin');

        Permission::create(['name' => 'access-other-users']);
        $admin->givePermissionTo('access-other-users');

        $gereja = [
            [
                'name' => 'Teknik Perencanaan Wilayah dan Kota',
                'email' => 'wilayahdankota@gmail.com',
                'password' => bcrypt('wilayahdankota@gmail.com'),
                'gereja_id' => 1,

            ],
            [
                'name' => 'Teknik Mesin',
                'email' => 'mesin@gmail.com',
                'password' => bcrypt('mesin@gmail.com'),
                'gereja_id' => 2,

            ],
            [
                'name' => 'Teknik Elktro',
                'email' => 'elektro@gmail.com',
                'password' => bcrypt('elektro@gmail.com'),
                'gereja_id' => 3,

            ],
            [
                'name' => 'Teknik Pertambangan',
                'email' => 'tambang@gmail.com',
                'password' => bcrypt('tambang@gmail.com'),
                'gereja_id' => 4,

            ],
            [
                'name' => 'Teknik Sipil',
                'email' => 'sipil@gmail.com',
                'password' => bcrypt('sipil@gmail.com'),
                'gereja_id' => 5,

            ],
            [
                'name' => 'sistem informasi',
                'email' => 'sisteminformasi@gmail.com',
                'password' => bcrypt('sisteminformasi@gmail.com'),
                'gereja_id' => 6,

            ],
            [
                'name' => 'Matematika',
                'email' => 'matematika@gmail.com',
                'password' => bcrypt('matematika@gmail.com'),
                'gereja_id' => 7,

            ],

            [
                'name' => 'Farmasi',
                'email' => 'farmasi@gmail.com',
                'password' => bcrypt('farmasi@gmail.com'),
                'gereja_id' => 8,

            ],

            [
                'name' => 'Fisika',
                'email' => 'fisikagmail.com',
                'password' => bcrypt('fisika@gmail.com'),
                'gereja_id' => 9,

            ],

            [
                'name' => 'Stastistika',
                'email' => 'stastistika@gmail.com',
                'password' => bcrypt('stastistika@gmail.com'),
                'gereja_id' => 10,

            ],

            [
                'name' => 'Biologi',
                'email' => 'biologi@gmail.com',
                'password' => bcrypt('biologi@gmail.com'),
                'gereja_id' => 11,

            ],

            [
                'name' => 'Kimia',
                'email' => 'kimia@gmail.com',
                'password' => bcrypt('kimia@gmail.com'),
                'gereja_id' => 12,

            ],
            [
                'name' => 'Geofisika',
                'email' => 'geofisika@gmail.com',
                'password' => bcrypt('geofisika@gmail.com'),
                'gereja_id' => 13,

            ],
            [
                'name' => 'Kelautan',
                'email' => 'kelautan@gmail.com',
                'password' => bcrypt('kelautan@gmail.com'),
                'gereja_id' => 14,

            ],
            [
                'name' => 'Perikanan',
                'email' => 'perikanan@gmail.com',
                'password' => bcrypt('perikanan@gmail.com'),
                'gereja_id' => 15,

            ],
            [
                'name' => 'Program Studi Teknik Geofisika',
                'email' => 'tekgeofisika@gmail.com',
                'password' => bcrypt('tekgeofisika@gmail.com'),
                'gereja_id' => 16,

            ],
            [
                'name' => 'Program Studi Teknik Komput ',
                'email' => 'tekkomputer@gmail.com',
                'password' => bcrypt('tekkomputer@gmail.com'),
                'gereja_id' => 17,

            ],
            [
                'name' => 'Program Profesi Akuntan',
                'email' => 'profesiakuntan@gmail.com',
                'password' => bcrypt('profesiakuntan@gmail.com'),
                'gereja_id' => 18,

            ],
            [
                'name' => 'Program Magister Akuntansi (S2)',
                'email' => 'magisterakuntansi@gmail.com',
                'password' => bcrypt('magisterakuntansi@gmail.com'),
                'gereja_id' => 19,

            ],
            [
                'name' => 'Program Studi Akuntansi (S1) ',
                'email' => 'studiakuntasi@gmail.com',
                'password' => bcrypt('studiakuntasi@gmail.com'),
                'gereja_id' => 20,

            ],
            [
                'name' => 'Program Doktor Manajemen (S3) ',
                'email' => 'doktormanajemen@gmail.com',
                'password' => bcrypt('doktormanajemen@gmail.com'),
                'gereja_id' => 21,

            ],
            [
                'name' => '	Program Magister Manajemen (S2) ',
                'email' => 'magistermanajemen@gmail.com',
                'password' => bcrypt('magistermanajemen@gmail.com'),
                'gereja_id' => 22,

            ],
            [
                'name' => '	Program Studi Manajemen (S1) ',
                'email' => 'studimanajemen@gmail.com',
                'password' => bcrypt('studimanajemen@gmail.com'),
                'gereja_id' => 23,

            ],
            [
                'name' => '	Program Doktor Ilmu Ekonomi (S3)',
                'email' => 'doktorilmuekonomi@gmail.com',
                'password' => bcrypt('doktorilmuekonomi@gmail.com'),
                'gereja_id' => 24,

            ],
            [
                'name' => 'Program Magister Ilmu Ekonomi (S2)',
                'email' => 'magisterilmuekonomi@gmail.com',
                'password' => bcrypt('magisterilmuekonomi@gmail.com'),
                'gereja_id' => 25,

            ],
            [
                'name' => 'Program Studi Ekonomi Pembangunan (S1)',
                'email' => 'studiekonomipembangunan@gmail.com',
                'password' => bcrypt('studiekonomipembangunan@gmail.com'),
                'gereja_id' => 26,

            ],
            [
                'name' => 'Akuntansi',
                'email' => 'akuntansi@gmail.com',
                'password' => bcrypt('akuntansi@gmail.com'),
                'gereja_id' => 27,

            ],
            [
                'name' => 'Manajemen',
                'email' => 'manajemen@gmail.com',
                'password' => bcrypt('manajemen@gmail.com'),
                'gereja_id' => 28,

            ],
            [
                'name' => '	Ilmu Ekonomi',
                'email' => 'ilmuekonomi@gmail.com',
                'password' => bcrypt('ilmuekonomi@gmail.com'),
                'gereja_id' => 29,

            ],
        ];

        foreach ($gereja as $user) {
            $newUser = User::create($user);
            $newUser->assignRole('gereja');
        }


        $wilayah = [
            [
                'name' => 'Fakultas Teknik',
                'email' => 'fateknik@gmail.com',
                'password' => bcrypt('fateknik@gmail.com'),
                'wilayah_id' => 1,

            ],

            [
                'name' => 'Fakultas Ekonomi & Bisnis',
                'email' => 'faekonomibisnis@gmail.com',
                'password' => bcrypt('faekonomibisnis@gmail.com'),
                'wilayah_id' => 2,

            ],

            [
                'name' => 'Fakultas Matematika & Ilmu Pengetahuan Alam',
                'email' => 'famipa@gmail.com',
                'password' => bcrypt('famipa@gmail.com'),
                'wilayah_id' => 3,

            ],
        ];

        foreach ($wilayah as $user) {
            $newUser = User::create($user);
            $newUser->assignRole('wilayah');
        }
    }
}