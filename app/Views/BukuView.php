#Buku

<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <?php if ($this->session->userdata('level') == 'admin') { ?>
    <a href="<?php echo base_url('buku/tambah'); ?>">Tambah Buku</a>
    <?php } ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Edisi</th>
            <th>Cetakan</th>
            <th>Sinopsis</th>
            <th>Halaman</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok</th>
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <th>Aksi</th>
            <?php } ?>
        </tr>
        <?php foreach ($buku as $b) { ?>
        <tr>
            <td><?php echo $b->id; ?></td>
            <td><?php echo $b->judul; ?></td>
            <td><?php echo $b->kategori; ?></td>
            <td><?php echo $b->penerbit; ?></td>
            <td><?php echo $b->edisi; ?></td>
            <td><?php echo $b->cetakan; ?></td>
            <td><?php echo $b->sinopsis; ?></td>
            <td><?php echo $b->halaman; ?></td>
            <td><?php echo $b->penulis; ?></td>
            <td><?php echo $b->tahun; ?></td>
            <td><?php echo $b->stok; ?></td>
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <td>
                <a href="<?php echo base_url('buku/edit/'.$b->id); ?>">
Edit</a> |
                <a href="<?php echo base_url('buku/hapus/'.$b->id); ?>"
onclick="return confirm('Yakin inggin hapus?');">Hapus</a>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>