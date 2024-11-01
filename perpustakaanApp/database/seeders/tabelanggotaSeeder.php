<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tabelanggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tableanggotas')->insert([
            [
                'Nama' => 'John Doe',
                'Alamat' => '123 Main St, Springfield',
                'Email' => 'johndoe@example.com',
                'Nomor_Telepon' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Nama' => 'Jane Smith',
                'Alamat' => '456 Elm St, Springfield',
                'Email' => 'janesmith@example.com',
                'Nomor_Telepon' => '081298765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
              [
                'Nama' => 'Jane Smith',
                'Alamat' => '456 Elm St, Springfield',
                'Email' => 'janesmith@example.com',
                'Nomor_Telepon' => '081298765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
