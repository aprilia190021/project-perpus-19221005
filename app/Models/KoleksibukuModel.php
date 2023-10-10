<?php
class KoleksiBukuModel {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function tambahKoleksiBuku($buku_id, $nomor_koleksi, $status_koleksi) {
        $sql = "INSERT INTO koleksi_buku (tb_buku_id, nomor_koleksi, status_koleksi) 
                VALUES (:buku_id, :nomor_koleksi, :status_koleksi)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':buku_id', $buku_id);
        $stmt->bindParam(':nomor_koleksi', $nomor_koleksi);
        $stmt->bindParam(':status_koleksi', $status_koleksi);
        
        return $stmt->execute();
    }

    public function ambilSemuaKoleksiBuku() {
        $sql = "SELECT * FROM koleksi_buku";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function ambilKoleksiBukuById($id) {
        $sql = "SELECT * FROM koleksi_buku WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function ubahKoleksiBuku($id, $buku_id, $nomor_koleksi, $status_koleksi) {
        $sql = "UPDATE koleksi_buku SET tb_buku_id = :buku_id, nomor_koleksi = :nomor_koleksi, status_koleksi = :status_koleksi
                WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':buku_id', $buku_id);
        $stmt->bindParam(':nomor_koleksi', $nomor_koleksi);
        $stmt->bindParam(':status_koleksi', $status_koleksi);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }

    public function hapusKoleksiBuku($id) {
        $sql = "DELETE FROM koleksi_buku WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>