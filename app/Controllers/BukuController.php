<?php

class BukuController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function index()
    {
        $query = "SELECT * FROM BukuController";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $query = "INSERT INTO buku (db_kategori_id, db_penerbit_id, judul, edisi, cetakan, sinopsis, halaman, penulis, tahun, cover)
                  VALUES (:db_kategori_id, :db_penerbit_id, :judul, :edisi, :cetakan, :sinopsis, :halaman, :penulis, :tahun, :cover)";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute($data);
        return $this->db->lastInsertId();
    }

    public function update($id, $data)
    {
        $query = "UPDATE buku 
                  SET db_kategori_id = :db_kategori_id, db_penerbit_id = :db_penerbit_id, 
                      judul = :judul, edisi = :edisi, cetakan = :cetakan, sinopsis = :sinopsis, 
                      halaman = :halaman, penulis = :penulis, tahun = :tahun, cover = :cover
                  WHERE id = :id";
        
        $stmt = $this->db->prepare($query);
        $data['id'] = $id;
        $stmt->execute($data);
        return true;
    }

    public function delete($id)
    {
        $query = "DELETE FROM BukuController WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    }
}