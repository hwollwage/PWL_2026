<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Clock\now;

class KategoriController extends Controller
{
    public function index() {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack / Makanan Ringan',
        //     'created_at' => now(),
        // ];
        // DB::table('m_kategori')->insert($data);
        // return "insert new data successfull";

        // $row = DB::table('m_kategori')
        //         ->where('kategori_kode', 'SNK')
        //         ->update(['kategori_nama' => 'Camilan']);
        // return "update data successfull, number of data that were updated is " . $row;

        // $row = DB::table('m_kategori')
        //         ->where('kategori_kode', 'SNK')
        //         ->delete();
        // return "delete data successfull, data that were deleted is " . $row;

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
