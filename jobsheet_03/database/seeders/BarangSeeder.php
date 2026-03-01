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
            // sup 1
            [
                'barang_id' => '101',
                'kategori_id' => '1',
                'barang_kode' => 'A001',
                'barang_nama' => 'Flour',
                'harga_beli' => '5',
                'harga_jual' => '7',
            ],
            [
                'barang_id' => '102',
                'kategori_id' => '1',
                'barang_kode' => 'A002',
                'barang_nama' => 'Butter',
                'harga_beli' => '6',
                'harga_jual' => '8',
            ],
            [
                'barang_id' => '103',
                'kategori_id' => '1',
                'barang_kode' => 'A003',
                'barang_nama' => 'Egg',
                'harga_beli' => '3',
                'harga_jual' => '5',
            ],
            [
                'barang_id' => '104',
                'kategori_id' => '1',
                'barang_kode' => 'A004',
                'barang_nama' => 'Bacon',
                'harga_beli' => '3',
                'harga_jual' => '6',
            ],
            [
                'barang_id' => '105',
                'kategori_id' => '1',
                'barang_kode' => 'A005',
                'barang_nama' => 'Fish',
                'harga_beli' => '2',
                'harga_jual' => '4',
            ],

            // sup 2
            [
                'barang_id' => '106',
                'kategori_id' => '2',
                'barang_kode' => 'A006',
                'barang_nama' => 'Coca-cola',
                'harga_beli' => '3',
                'harga_jual' => '4',
            ],
            [
                'barang_id' => '107',
                'kategori_id' => '2',
                'barang_kode' => 'A007',
                'barang_nama' => 'Milk',
                'harga_beli' => '5',
                'harga_jual' => '7',
            ],
            [
                'barang_id' => '108',
                'kategori_id' => '2',
                'barang_kode' => 'A008',
                'barang_nama' => 'Fanta',
                'harga_beli' => '3',
                'harga_jual' => '6',
            ],
            [
                'barang_id' => '109',
                'kategori_id' => '2',
                'barang_kode' => 'A009',
                'barang_nama' => 'Milk',
                'harga_beli' => '5',
                'harga_jual' => '7',
            ],
            [
                'barang_id' => '110',
                'kategori_id' => '2',
                'barang_kode' => 'A010',
                'barang_nama' => 'Tea',
                'harga_beli' => '2',
                'harga_jual' => '3',
            ],

            // sup 3
            [
                'barang_id' => '111',
                'kategori_id' => '3',
                'barang_kode' => 'A011',
                'barang_nama' => 'Shampoo',
                'harga_beli' => '4',
                'harga_jual' => '6',
            ],
            [
                'barang_id' => '112',
                'kategori_id' => '3',
                'barang_kode' => 'A012',
                'barang_nama' => 'Soap',
                'harga_beli' => '2',
                'harga_jual' => '4',
            ],
            [
                'barang_id' => '113',
                'kategori_id' => '3',
                'barang_kode' => 'A013',
                'barang_nama' => 'Toothpaste',
                'harga_beli' => '4',
                'harga_jual' => '5',
            ],
            [
                'barang_id' => '114',
                'kategori_id' => '3',
                'barang_kode' => 'A014',
                'barang_nama' => 'Deodorant',
                'harga_beli' => '5',
                'harga_jual' => '7',
            ],
            [
                'barang_id' => '115',
                'kategori_id' => '3',
                'barang_kode' => 'A015',
                'barang_nama' => 'Mouth Wash',
                'harga_beli' => '6',
                'harga_jual' => '7',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
