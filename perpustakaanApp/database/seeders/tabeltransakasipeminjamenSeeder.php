<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tabeltransakasipeminjamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabeltransaksipeminjamen')->insert([
            [
                'ID Anggota' => 'AG001',
                'ID buku' => 'BK001',
                'Tanggal Pinjam' => Carbon::now()->subDays(10),
                'Tanggal Pengembalian' => Carbon::now()->subDays(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ID Anggota' => 'AG002',
                'ID buku' => 'BK002',
                'Tanggal Pinjam' => Carbon::now()->subDays(5),
                'Tanggal Pengembalian' => Carbon::now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
