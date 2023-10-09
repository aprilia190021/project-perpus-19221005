<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Definisikan kelas model Kategori
class Category {
    public $id;
    public $name;
    public $description;

    public function __construct($id, $name, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
}

// Fungsi untuk mengambil daftar kategori dari database
function getCategories() {
    global $conn;
    $categories = array();

    $sql = "SELECT list, name FROM categories";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $category = new Category($row["list"], $row["name"], $row["description"]);
            array_push($categories, $category);
        }
    }

    return $categories;
}

// Contoh penggunaan
$kategori = getCategories();

foreach ($kategori as $category) {
    echo "daftar kategori: " . $category->list . "<br>";
    echo "nama kategori: " . $category->name . "<br>";
    echo "deskripsi: " . $category->description . "<br>";
    echo "<br>";
}

// Tutup koneksi database
$conn->close();
?>