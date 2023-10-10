<?php
class Peminjaman {
    private $id;
    private $tgl_peminjaman;
    private $tgl_pengembalian;
    private $tb_pengguna_id_peminjam;
    private $tb_pengguna_id_pengembalian;
    private $tb_anggota_id;
    private $tb_buku_id;
    private $denda;

    public function __construct($tgl_peminjaman, $tgl_pengembalian, $tb_pengguna_id_peminjam, $tb_pengguna_id_pengembalian, $tb_anggota_id, $tb_buku_id, $denda) {
        $this->tgl_peminjaman = $tgl_peminjaman;
        $this->tgl_pengembalian = $tgl_pengembalian;
        $this->tb_pengguna_id_peminjam = $tb_pengguna_id_peminjam;
        $this->tb_pengguna_id_pengembalian = $tb_pengguna_id_pengembalian;
        $this->tb_anggota_id = $tb_anggota_id;
        $this->tb_buku_id = $tb_buku_id;
        $this->denda = $denda;
    }


    public function getId() {
        return $this->id;
    }
}
?>