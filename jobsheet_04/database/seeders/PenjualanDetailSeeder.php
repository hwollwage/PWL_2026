<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'detail_id' => '01',
                'penjualan_id' => '1',
                'barang_id' => '101',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '02',
                'penjualan_id' => '1',
                'barang_id' => '101',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '03',
                'penjualan_id' => '1',
                'barang_id' => '101',
                'harga' => '14',
                'jumlah' => '4',
            ],
//
            [
                'detail_id' => '04',
                'penjualan_id' => '2',
                'barang_id' => '102',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '05',
                'penjualan_id' => '2',
                'barang_id' => '102',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '06',
                'penjualan_id' => '2',
                'barang_id' => '102',
                'harga' => '14',
                'jumlah' => '4',
            ],
//
            [
                'detail_id' => '07',
                'penjualan_id' => '3',
                'barang_id' => '103',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '08',
                'penjualan_id' => '3',
                'barang_id' => '103',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '09',
                'penjualan_id' => '3',
                'barang_id' => '103',
                'harga' => '14',
                'jumlah' => '4',
            ],
//
            [
                'detail_id' => '10',
                'penjualan_id' => '4',
                'barang_id' => '104',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '11',
                'penjualan_id' => '4',
                'barang_id' => '104',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '12',
                'penjualan_id' => '4',
                'barang_id' => '104',
                'harga' => '14',
                'jumlah' => '4',
            ],
//
            [
                'detail_id' => '13',
                'penjualan_id' => '5',
                'barang_id' => '105',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '14',
                'penjualan_id' => '5',
                'barang_id' => '105',
                'harga' => '14',
                'jumlah' => '4',
            ],
            [
                'detail_id' => '15',
                'penjualan_id' => '5',
                'barang_id' => '105',
                'harga' => '14',
                'jumlah' => '4',
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
