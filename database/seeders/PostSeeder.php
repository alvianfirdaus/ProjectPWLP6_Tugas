<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'nama_lengkap' => 'ALVIAN NUR FIRDAUS',
            'nama' => 'Alvian',
            'nim' => 2141720022,
            'absen' => 05,
            'kelas' => 'TI-2F',
            'prodi' => 'D-IV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'alamat' => 'Aliyan, Rogojampi, Banyuwangi',
            'alamat_mlg' => 'Jln Bunga Kumis Kucing',
            'skil' => 'videography',
            'sosmed' => '@alvian7968'
        ],
        [
            'nama_lengkap' => 'M EGA RAMA FERNANDA',
            'nama' => 'Ega',
            'nim' => 2141720143,
            'absen' => 17,
            'kelas' => 'TI-2F',
            'prodi' => 'D-IV Teknik Informatika',
            'jurusan' => 'Teknologi Informasi',
            'alamat' => 'Jln Mawar, Giri, Banyuwangi ',
            'alamat_mlg' => 'Dau, Landungsari',
            'skil' => 'Editing Foto',
            'sosmed' => '@egaram'
        ]
        ];
        DB::table('profill')->insert($data);
    }
}
