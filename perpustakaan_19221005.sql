CREATE DATABASE Perpustakaan_19221005;

USE Perpustakaan_19221005;

CREATE TABLE tb_pengguna (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    nama_lengkap VARCHAR(255) NOT NULL,
    katasandi VARCHAR(64)
) ENGINE=INNODB;
  
CREATE TABLE tb_anggota(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama_lengkap VARCHAR(255) NOT NULL,
    alamat VARCHAR(512),
    kota VARCHAR(70),
    notelp VARCHAR(18),
    email VARCHAR(255)
) ENGINE=INNODB;
  
CREATE TABLE tb_penerbit(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    penerbit VARCHAR(255) NOT NULL,
    kota VARCHAR(30)
) ENGINE=INNODB;
  
CREATE TABLE tb_kategori( 
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    kategori VARCHAR(255),
    kode_ddc VARCHAR(10)
) ENGINE=INNODB;
   
CREATE TABLE tb_buku(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tb_kategori_id INT UNSIGNED,
    tb_penerbit_id INT UNSIGNED,
    judul VARCHAR(512) NOT NULL,
    edisi VARCHAR(10),
    cetakan VARCHAR(10),
    sinopsis TEXT,
    halaman VARCHAR(20),
    penulis VARCHAR(100),
    tahun YEAR,
    cover_file VARCHAR(512),
    FOREIGN KEY (tb_kategori_id) REFERENCES tb_kategori(id) ON UPDATE CASCADE,
    FOREIGN KEY (tb_penerbit_id) REFERENCES tb_penerbit(id) ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE TABLE tb_koleksibuku(
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tb_buku_id INT UNSIGNED,
    nomor_koleksi INT,
    status_koleksi ENUM('A', 'F', 'M', 'R') DEFAULT 'A',
    FOREIGN KEY(tb_buku_id) REFERENCES tb_buku(id) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=INNODB;
 
CREATE TABLE tb_peminjaman (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tgl_peminjaman DATETIME NOT NULL,
    tgl_pengembalian DATETIME NULL,
    tb_pengguna_id_peminjaman INT UNSIGNED NOT NULL,
    tb_pengguna_id_pengembalian INT UNSIGNED NULL,
    tb_anggota_id INT UNSIGNED NOT NULL,
    tb_buku_id INT UNSIGNED NULL,
    denda DECIMAL(10, 2),
    FOREIGN KEY (tb_pengguna_id_peminjaman) REFERENCES tb_pengguna(id) ON UPDATE CASCADE,
    FOREIGN KEY (tb_pengguna_id_pengembalian) REFERENCES tb_pengguna(id) ON UPDATE CASCADE,
    FOREIGN KEY (tb_anggota_id) REFERENCES tb_anggota(id) ON UPDATE CASCADE,
    FOREIGN KEY (tb_buku_id) REFERENCES tb_buku(id) ON UPDATE CASCADE
) ENGINE=INNODB;\