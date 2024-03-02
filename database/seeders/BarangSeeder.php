<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode'=> 'ATK-001', 'barang_nama'=> 'Pensil', 'harga_beli'=>'4000', 'harga_jual' => 5000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode'=> 'ATK-002', 'barang_nama'=> 'Bolpoin', 'harga_beli'=>'4000', 'harga_jual' => 5000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode'=> 'ATK-003', 'barang_nama'=> 'Penghapus', 'harga_beli'=>'4000', 'harga_jual' => 5000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode'=> 'ELK-001', 'barang_nama'=> 'Facum', 'harga_beli'=>'1500000', 'harga_jual' => 2000000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode'=> 'ELK-002', 'barang_nama'=> 'Mesin Cuci', 'harga_beli'=>'1000000', 'harga_jual' => 1500000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode'=> 'ELK-003', 'barang_nama'=> 'Hydryer', 'harga_beli'=>'300000', 'harga_jual' => 500000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode'=> 'MKN-001', 'barang_nama'=> 'Roti Tawar', 'harga_beli'=>'12000', 'harga_jual' => 15000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode'=> 'MKN-002', 'barang_nama'=> 'Sosis', 'harga_beli'=>'5000', 'harga_jual' => 10000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode'=> 'MKN-003', 'barang_nama'=> 'Biskuit', 'harga_beli'=>'6000', 'harga_jual' => 8000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode'=> 'MNM-001', 'barang_nama'=> 'Aqua', 'harga_beli'=>'3000', 'harga_jual' => 5000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
