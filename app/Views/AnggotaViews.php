<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Anggota</title>
</head>
<body>
    <h1>Daftar Anggota</h1>
    <?php if ($this->session->userdata('level') == 'admin') { ?>
    <a href="<?php echo base_url('anggota/tambah'); ?>">Tambah Anggota</a> 
    <?php } ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <th>Aksi</th> 
            <?php } ?>
        </tr> 
        <?php foreach ($anggota as $a) { ?>
        <tr> 
            <td><?php echo $a->id; ?></td> 
            <td><?php echo $a->nama; ?></td> 
            <td><?php echo $a->nim; ?></td> 
            <td><?php echo $a->jurusan; ?></td> 
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <td> 
                <a href="<?php echo base_url('anggota/edit/'.$a->id); ?>">Edit</a> | 
                <a href="<?php echo base_url('anggota/hapus/'.$a->id); ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a> 
            </td> 
            <?php } ?>
        </tr> 
        <?php } ?>
    </table>
</body>
</html>
