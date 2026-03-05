<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // DB::insert('INSERT INTO m_level(level_kode, level_nama, created_at) 
        //             VALUES(?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return "new data is inserted successfully";

        // $row = DB::update('UPDATE m_level SET level_nama = ?
        //             WHERE level_kode = ?', ['Customer', 'CUS']);
        // return "update data successfull, number of data updated " . $row;

        // $row = DB::delete('DELETE FROM m_level WHERE level_kode = ?', ['CUS']);
        // return "delete data successfull, number of data that were deleted" . $row;

        $data = DB::select('SELECT * FROM m_level');
        return view('level', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
