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
        $data = [
            [
                'penjualan_id' => '1',
                'user_id' => '1',
                'pembeli' => 'Jokowi',
                'penjualan_kode' => 'PK100',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '2',
                'user_id' => '1',
                'pembeli' => 'Gibran',
                'penjualan_kode' => 'PK101',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '3',
                'user_id' => '1',
                'pembeli' => 'Prabowo',
                'penjualan_kode' => 'PK102',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '4',
                'user_id' => '1',
                'pembeli' => 'Bahlil',
                'penjualan_kode' => 'PK103',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '5',
                'user_id' => '1',
                'pembeli' => 'Puan',
                'penjualan_kode' => 'PK104',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '6',
                'user_id' => '1',
                'pembeli' => 'Pria Solo',
                'penjualan_kode' => 'PK105',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '7',
                'user_id' => '1',
                'pembeli' => 'orang 1',
                'penjualan_kode' => 'PK106',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '8',
                'user_id' => '1',
                'pembeli' => 'orang 2',
                'penjualan_kode' => 'PK107',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '9',
                'user_id' => '1',
                'pembeli' => 'orang 3',
                'penjualan_kode' => 'PK108',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => '10',
                'user_id' => '1',
                'pembeli' => 'orang 4',
                'penjualan_kode' => 'PK109',
                'penjualan_tanggal' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
