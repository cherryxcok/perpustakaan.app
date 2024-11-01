<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class tabelbukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabelbukus')->insert([
            [
                'Judul Buku' => 'Pemograman PHP untuk Pemula',
                'Penulis' => 'Ahmad Setiawan',
                'Penerbit' => 'Media Belajar',
                'Tahun Terbit' => 2021,
                'Jumlah Stok Buku' => 10,
            ],
            [
                'Judul Buku' => 'Belajar Laravel dengan Mudah',
                'Penulis' => 'Budi Sucipto',
                'Penerbit' => 'Pustaka Coding',
                'Tahun Terbit' => 2020,
                'Jumlah Stok Buku' => 15,
            ],
            [
                'Judul Buku' => 'Panduan Dasar JavaScript',
                'Penulis' => 'Citra Dewi',
                'Penerbit' => 'IT Publisher',
                'Tahun Terbit' => 2019,
                'Jumlah Stok Buku' => 20,
            ],
        ]);
    }
}
