<?php
class BukuModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function tambahBuku($kategori_id, $penerbit_id, $judul, $edisi, $cetakan, $sinopsis, $halaman, $penulisan, $tahun, $cover_file) {
        $sql = "INSERT INTO buku (tb_kategori_id, tb_penerbit_id, judul, edisi, cetakan, sinopsis, halaman, penulisan, tahun, cover_file)
                VALUES (:kategori_id, :penerbit_id, :judul, :edisi, :cetakan, :sinopsis, :halaman, :penulisan, :tahun, :cover_file)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':kategori_id', $kategori_id);
        $stmt->bindParam(':penerbit_id', $penerbit_id);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':edisi', $edisi);
        $stmt->bindParam(':cetakan', $cetakan);
        $stmt->bindParam(':sinopsis', $sinopsis);
        $stmt->bindParam(':halaman', $halaman);
        $stmt->bindParam(':penulisan', $penulisan);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':cover_file', $cover_file);    
        
        return $stmt->execute();
    }

    public function ambilSemuaBuku() {
        $sql = "SELECT * FROM buku";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function ambilBukuById($id) {
        $sql = "SELECT * FROM buku WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function ubahBuku($id, $kategori_id, $penerbit_id, $judul, $edisi, $cetakan, $sinopsis, $halaman, $penulisan, $tahun, $cover_file) {
        $sql = "UPDATE buku SET tb_kategori_id = :kategori_id, tb_penerbit_id = :penerbit_id, judul = :judul, edisi = :edisi, cetakan = :cetakan, sinopsis = :sinopsis, halaman = :halaman, penulisan = :penulisan, tahun = :tahun, cover_file = :cover_file
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':kategori_id', $kategori_id);
        $stmt->bindParam(':penerbit_id', $penerbit_id);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':edisi', $edisi);
        $stmt->bindParam(':cetakan', $cetakan);
        $stmt->bindParam(':sinopsis', $sinopsis);
        $stmt->bindParam(':halaman', $halaman);
        $stmt->bindParam(':penulisan', $penulisan);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':cover_file', $cover_file);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }   
    
    public function hapusBuku($id) {
        $sql = "DELETE FROM buku WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>