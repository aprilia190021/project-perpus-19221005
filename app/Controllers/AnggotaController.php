<?php
class AnggotaController {
    private $db;

    public function __construct() {
        // Membuat koneksi ke database menggunakan PDO
        $dsn = "mysql:host=sql;dbname=perpustakaan_19220993";
        $username = "username";
        $password = "password";

        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("koneksi ke database gagal: " . $e->getMessage());
        } 
    }

    public function tambahAnggota($nama, $alamat, $kota, $noTelp, $emai) {
        $query = "INSERT INTO anggota (nama, alamat, kota, no_telp, email) VALUES (:nama, alamat, :kota,:no_telp, :email)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':nama', $nama);
        $statement->bindParam(':alamat', $alamat);
        $statement->bindParam(':kota', $kota);
        $statement->bindParam(':no_telp', $noTelp);
        $statement->bindParam(':email', $email);
        $statement->execute();
    }
    public function getAnggotaById($id) {
        $query = "SELECT * FROM anggota WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllAnggota() {
        $query = "SELECT * FROM anggota";
        $statement = $this->db->query($query);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        
    }
}