<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Kategori_id' => 1, 'kategori_kode' => 'ATK', 'kategori_nama' => 'Alat Tulis Kantor'],
            ['Kategori_id' => 2, 'kategori_kode' => 'ELK', 'kategori_nama' => 'Elektronik'],
            ['Kategori_id' => 3, 'kategori_kode' => 'KMP', 'kategori_nama' => 'Komputer'],
            ['Kategori_id' => 4, 'kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan'],
            ['Kategori_id' => 5, 'kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
