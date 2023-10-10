<?php
// Konfigurasi database
$host = 'sql';
$database = 'perpustakaan_19220993';

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Model untuk tabel "penerbit"
class Penerbit {
    public $id;
    public $nama;

    public function __construct($id, $nama) {
        $this->id = $id;
        $this->nama = $nama;
    }

    // Metode untuk menyimpan penerbit ke database
    public function simpan() {
        global $koneksi;
        $nama = mysqli_real_escape_string($koneksi, $this->nama);
        $query = "INSERT INTO penerbit (nama) VALUES ('$nama')";
        return mysqli_query($koneksi, $query);
    }
}

// Model untuk tabel "kota"
class Kota {
    public $id;
    public $nama;

    public function __construct($id, $nama) {
        $this->id = $id;
        $this->nama = $nama;
    }

    // Metode untuk menyimpan kota ke database
    public function simpan() {
        global $koneksi;
        $nama = mysqli_real_escape_string($koneksi, $this->nama);
        $query = "INSERT INTO kota (nama) VALUES ('$nama')";
        return mysqli_query($koneksi, $query);
    }
}

// Contoh penggunaan model
$penerbit = new Penerbit(null, "Penerbit ABC");
if ($penerbit->simpan()) {
    echo "Penerbit berhasil disimpan.";
} else {
    echo "Gagal menyimpan penerbit.";
}

$kota = new Kota(null, "Kota XYZ");
if ($kota->simpan()) {
    echo "Kota berhasil disimpan.";
} else {
    echo "Gagal menyimpan kota.";
}

// Tutup koneksi database
mysqli_close($koneksi);
?>