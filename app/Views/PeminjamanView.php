<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Peminjaman</title>
</head>
<body>
    <h1>Daftar Peminjaman</h1>
    <?php if ($this->session->userdata('level') == 'anggota') { ?>
    <a href="<?php echo base_url('peminjaman/tambah'); ?>">Tambah Peminjaman</a> 
    <?php } ?>
    <table border="1">
        <tr> 
            <th>ID</th> 
            <th>Anggota</th> 
            <th>Buku</th> 
            <th>Tanggal Pinjam</th> 
            <th>Tanggal Kembali</th> 
            <th>Denda</th> 
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <th>Aksi</th> 
            <?php } ?>
        </tr> 
        <?php foreach ($peminjaman as $p) { ?>
        <tr> 
            <td><?php echo $p->id; ?></td> 
            <td><?php echo $p->anggota; ?></td> 
            <td><?php echo $p->buku; ?></td> 
            <td><?php echo $p->tanggal_pinjam; ?></td> 
            <td><?php echo $p->tanggal_kembali; ?></td> 
            <td><?php echo $p->denda; ?></td> 
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <td> 
                <a href="<?php echo base_url('peminjaman/edit/'.$p->id); ?>">Edit</a> | 
                <a href="<?php echo base_url('peminjaman/hapus/'.$p->id); ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a> 
            </td> 
            <?php } ?>
        </tr> 
        <?php } ?>
    </table>
</body>
</html>