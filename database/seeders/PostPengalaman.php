<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostPengalaman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'nama' => 'ALVIAN NUR FIRDAUS',
            'nama_kejuaraan' => 'KMIPN - IV',
            'tanggal' => '1 Agustus 2022',
            'deskripsi' => 'Finalis Keamanan Siber KMIPN - IV',
            'subtotal' => 'Rp 400',
            'cerita' => 'Saya Alvian Nur Firdaus, teman teman dan keluarga saya sering memanggil saya Alvian selama saya berkuliah di Polinema, saya sangat senang dan bangga karena bisa menuntut ilmu dan mendapat berbagai macam relasi teman dan hal paling berkesan yaitu dapat mengikuti perlombaan KMIPN 4 di politeknik Negeri Batam'
        ],
        [
            'nama' => 'M EGA RAMA FERNANDA',
            'nama_kejuaraan' => 'INTERCOMP',
            'tanggal' => '17 Oktober 2022',
            'deskripsi' => 'Juara 1 Keamanan Siber',
            'subtotal' => 'Rp 900',
            'cerita' => 'Selama masa perkuliahan, saya mendapat banyak sekali pelajaran seperti kerjasama, cara berbicara setiap teman saya dari berbagai daerah, dan masih banyak lagi. Dari situ saya mengerti bahwa masa perkuliahan dengan sekolah pada umumnya ada perbedaan sedikit, dan jauh dari dugaan yang saya harapkan.'
        ]
        ];
        DB::table('pengalaman')->insert($data);
    }
}
