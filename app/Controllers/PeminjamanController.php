<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Peminjaman;

class PeminjamanController extends PeminjamanController
{
    public function index()
    {
        // Logika untuk menampilkan daftar peminjaman
    }

    public function create()
    {
        // Logika untuk menampilkan form peminjaman
    }

    public function store( $request)
    {
        // Logika untuk menyimpan data peminjaman ke dalam database
        $tgl_peminjaman = $request->input('tgl_peminjaman');
        $tgl_pengembalian = $request->input('tgl_pengembalian');
        $tb_penguna_id_pinjaman = $request->input('tb_penguna_id_pinjaman');
        $tb_penguna_id_pengembalian = $request->input('tb_penguna_id_pengembalian');
        $tb_anggota_id = $request->input('tb_anggota_id');
        $tb_buku = $request->input('tb_buku');
        $denda = $request->input('denda');

        // Simpan data ke dalam database

        // Redirect atau tampilkan pesan sukses
    }

    public function show($id)
    {
        // Logika untuk menampilkan detail peminjaman dengan ID tertentu
    }

    public function edit($id)
    {
        // Logika untuk menampilkan form edit peminjaman dengan ID tertentu
    }

    public function update( $request, $id)
    {
        // Logika untuk menyimpan perubahan data peminjaman ke dalam database
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data peminjaman dengan ID tertentu
    }
}
?>