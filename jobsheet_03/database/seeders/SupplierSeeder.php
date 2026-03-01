<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => '1',
                'supplier_kode' => 'SUP1',
                'supplier_nama' => 'PT. A',
                'supplier_alamat' => 'Jl. Ratapan Tembok Solo 1',
            ],
            [
                'supplier_id' => '2',
                'supplier_kode' => 'SUP2',
                'supplier_nama' => 'PT. B',
                'supplier_alamat' => 'Jl. Sawit 271',
            ],
            [
                'supplier_id' => '3',
                'supplier_kode' => 'SUP3',
                'supplier_nama' => 'PT. C',
                'supplier_alamat' => 'Jl. Rakabuming 19',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
