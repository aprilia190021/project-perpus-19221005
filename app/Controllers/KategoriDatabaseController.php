<?php
// Koneksi ke database
$servername = "sql"; 
$database = "perpustakaan_19220993";

$conn = new mysqli( $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk menambahkan kategori baru
function tambahKategori($ide, $kode_ddc) {
    global $conn;
    $sql = "INSERT INTO kategori (ide, kode_ddc) VALUES ('$ide', '$kode_ddc')";
    if ($conn->query($sql) === TRUE) {
        return "Kategori berhasil ditambahkan.";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fungsi untuk mengambil daftar kategori
function getDaftarKategori() {
    global $conn;
    $sql = "SELECT * FROM kategori";
    $result = $conn->query($sql);
    $kategori = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $kategori[] = $row;
        }
    }
    return $kategori;
}

// Fungsi untuk menghapus kategori berdasarkan ID
function hapusKategori($id) {
    global $conn;
    $sql = "DELETE FROM kategori WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        return "Kategori berhasil dihapus.";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi database
$conn->close();
?>