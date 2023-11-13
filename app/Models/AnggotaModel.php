<?php
// Konfigurasi koneksi ke database
$host = 'localhost';
$username = 'username_database';
$password = 'password_database';
$database = 'nama_database';

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Fungsi untuk menambahkan anggota
function tambahAnggota($nama, $alamat, $nomor_telepon, $email, $kota) {
    global $koneksi;
    $query = "INSERT INTO Anggota (Nama, Alamat, Nomor_Telepon, Email, Kota) VALUES ('$nama', '$alamat', '$nomor_telepon', '$email', '$kota')";
    return mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil data anggota berdasarkan ID
function ambilAnggota($id) {
    global $koneksi;
    $query = "SELECT * FROM Anggota WHERE ID = $id";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

// Fungsi untuk mengupdate data anggota
function updateAnggota($id, $nama, $alamat, $nomor_telepon, $email) {
    global $koneksi;
    $query = "UPDATE Anggota SET Nama='$nama', Alamat='$alamat', Nomor_Telepon='$nomor_telepon', Email='$email' WHERE ID=$id";
    return mysqli_query($koneksi, $query);
}

// Contoh penggunaan
if (tambahAnggota('John Doe', '123 Main St', '555-123-4567', 'john@example.com', '2023-10-06')) {
    echo "Anggota berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan anggota.";
}

$idAnggota = 1; // Ganti dengan ID anggota yang ingin diambil
$dataAnggota = ambilAnggota($idAnggota);
if ($dataAnggota) {
    echo "Nama anggota: " . $dataAnggota['Nama'];
} else {
    echo "Anggota tidak ditemukan.";
}

if (updateAnggota($idAnggota, 'Jane Smith', '456 Elm St', '555-987-6543', 'jane@example.com')) {
    echo "Data anggota berhasil diupdate.";
} else {
    echo "Gagal mengupdate data anggota.";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>