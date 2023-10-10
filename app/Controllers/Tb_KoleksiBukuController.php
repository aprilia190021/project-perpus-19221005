<?php
// Koneksi ke database (Perpustakaan_19220993)
$koneksi = new mysqli("sql", "Perpustakaan_19220993");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Fungsi untuk menambahkan koleksi buku baru
function tambahKoleksiBuku($tb_buku_id, $nomor_koleksi, $status_koleksi) {
    global $koneksi;
    $sql = "INSERT INTO nama_tabel (tb_buku_id, nomor_koleksi, status_koleksi) VALUES ('$tb_buku_id', '$nomor_koleksi', '$status_koleksi')";
    if ($koneksi->query($sql) === TRUE) {
        return "Koleksi buku berhasil ditambahkan.";
    } else {
        return "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Fungsi untuk mengambil semua koleksi buku
function semuaKoleksiBuku() {
    global $koneksi;
    $sql = "SELECT * FROM nama_tabel";
    $result = $koneksi->query($sql);
    $koleksi = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $koleksi[] = $row;
        }
    }
    return $koleksi;
}

// Fungsi untuk mengubah status koleksi buku
function ubahStatusKoleksi($id, $status_koleksi) {
    global $koneksi;
    $sql = "UPDATE nama_tabel SET status_koleksi = '$status_koleksi' WHERE tb_buku_id = '$id'";
    if ($koneksi->query($sql) === TRUE) {
        return "Status koleksi buku berhasil diubah.";
    } else {
        return "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Fungsi untuk menghapus koleksi buku
function hapusKoleksiBuku($id) {
    global $koneksi;
    $sql = "DELETE FROM nama_tabel WHERE tb_buku_id = '$id'";
    if ($koneksi->query($sql) === TRUE) {
        return "Koleksi buku berhasil dihapus.";
    } else {
        return "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi database
$koneksi->close();
?>