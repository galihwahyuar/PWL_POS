<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['penjualan_id'=> 1, 'user_id'=> 3, 'pembeli'=> 'Yuli', 'penjualan_code'=> 'PK001', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 2, 'user_id'=> 3, 'pembeli'=> 'Eva', 'penjualan_code'=> 'PK002', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 3, 'user_id'=> 3, 'pembeli'=> 'Mawar', 'penjualan_code'=> 'PK003', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 4, 'user_id'=> 3, 'pembeli'=> 'Bagus', 'penjualan_code'=> 'PK004', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 5, 'user_id'=> 3, 'pembeli'=> 'Melati', 'penjualan_code'=> 'PK005', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 6, 'user_id'=> 3, 'pembeli'=> 'Totok', 'penjualan_code'=> 'PK006', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 7, 'user_id'=> 3, 'pembeli'=> 'Lilik', 'penjualan_code'=> 'PK007', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 8, 'user_id'=> 3, 'pembeli'=> 'Agus', 'penjualan_code'=> 'PK008', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 9, 'user_id'=> 3, 'pembeli'=> 'Slamet', 'penjualan_code'=> 'PK009', 'penjualan_tanggal'=>now()],
            ['penjualan_id'=> 10, 'user_id'=> 3, 'pembeli'=> 'Kiki', 'penjualan_code'=> 'PK010', 'penjualan_tanggal'=>now()],
        ];
        DB::table('t_penjualan')->insert($data);

    }
}
