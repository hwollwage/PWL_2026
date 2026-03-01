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
            [
                'kategori_id' => '1',
                'kategori_kode' => 'ABC1',
                'kategori_nama' => 'Food',
            ],
            [
                'kategori_id' => '2',
                'kategori_kode' => 'ABC2',
                'kategori_nama' => 'Beverage',
            ],
            [
                'kategori_id' => '3',
                'kategori_kode' => 'ABC3',
                'kategori_nama' => 'Beauty Health',
            ],
            [
                'kategori_id' => '4',
                'kategori_kode' => 'ABC4',
                'kategori_nama' => 'Home Care',
            ],
            [
                'kategori_id' => '5',
                'kategori_kode' => 'ABC5',
                'kategori_nama' => 'Baby Kid',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
