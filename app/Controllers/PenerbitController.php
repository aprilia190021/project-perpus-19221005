<?php
// Konfigurasi koneksi ke database
$host = 'localhost';
$username = 'username_database';
$password = 'password_database';
$database = 'nama_database';

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Fungsi untuk menambahkan penerbit
function tambahPenerbit($nama, $alamat) {
    global $koneksi;
    $query = "INSERT INTO Penerbit (Nama, Alamat) VALUES ('$nama', '$alamat')";
    return mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil data penerbit berdasarkan ID
function ambilPenerbit($id) {
    global $koneksi;
    $query = "SELECT * FROM Penerbit WHERE ID = $id";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

// Fungsi untuk mengupdate data penerbit
function updatePenerbit($id, $nama, $alamat) {
    global $koneksi;
    $query = "UPDATE Penerbit SET Nama='$nama', Alamat='$alamat' WHERE ID=$id";
    return mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus penerbit
function hapusPenerbit($id) {
    global $koneksi;
    $query = "DELETE FROM Penerbit WHERE ID = $id";
    return mysqli_query($koneksi, $query);
}

// Contoh penggunaan
if (tambahPenerbit('Penerbit A', 'Jalan Penerbit 123')) {
    echo "Penerbit berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan penerbit.";
}

$idPenerbit = 1; // Ganti dengan ID penerbit yang ingin diambil
$dataPenerbit = ambilPenerbit($idPenerbit);
if ($dataPenerbit) {
    echo "Nama penerbit: " . $dataPenerbit['Nama'];
} else {
    echo "Penerbit tidak ditemukan.";
}

if (updatePenerbit($idPenerbit, 'Penerbit B', 'Jalan Penerbit 456')) {
    echo "Data penerbit berhasil diupdate.";
} else {
    echo "Gagal mengupdate data penerbit.";
}

if (hapusPenerbit($idPenerbit)) {
    echo "Penerbit berhasil dihapus.";
} else {
    echo "Gagal menghapus penerbit.";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>