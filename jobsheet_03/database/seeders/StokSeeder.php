<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => '01',
                'supplier_id' => '1',
                'barang_id' => '101',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '50',
            ],
            [
                'stok_id' => '02',
                'supplier_id' => '1',
                'barang_id' => '102',
                'user_id' => '2',
                'stok_tanggal' => now(),
                'stok_jumlah' => '25',
            ],
            [
                'stok_id' => '03',
                'supplier_id' => '1',
                'barang_id' => '103',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '50',
            ],
            [
                'stok_id' => '04',
                'supplier_id' => '1',
                'barang_id' => '104',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '30',
            ],
            [
                'stok_id' => '05',
                'supplier_id' => '1',
                'barang_id' => '105',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '21',
            ],
            [
                'stok_id' => '06',
                'supplier_id' => '1',
                'barang_id' => '106',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '21',
            ],
            [
                'stok_id' => '07',
                'supplier_id' => '1',
                'barang_id' => '107',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '11',
            ],
            [
                'stok_id' => '08',
                'supplier_id' => '1',
                'barang_id' => '108',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '53',
            ],
            [
                'stok_id' => '09',
                'supplier_id' => '1',
                'barang_id' => '109',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '44',
            ],
            [
                'stok_id' => '10',
                'supplier_id' => '1',
                'barang_id' => '110',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '50',
            ],
            [
                'stok_id' => '11',
                'supplier_id' => '1',
                'barang_id' => '111',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '52',
            ],
            [
                'stok_id' => '12',
                'supplier_id' => '1',
                'barang_id' => '112',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '32',
            ],
            [
                'stok_id' => '13',
                'supplier_id' => '1',
                'barang_id' => '113',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '58',
            ],
            [
                'stok_id' => '14',
                'supplier_id' => '1',
                'barang_id' => '114',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '41',
            ],
            [
                'stok_id' => '15',
                'supplier_id' => '1',
                'barang_id' => '115',
                'user_id' => '1',
                'stok_tanggal' => now(),
                'stok_jumlah' => '48',
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
