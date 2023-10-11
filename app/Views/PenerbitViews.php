<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penerbit</title>
</head>
<body>
    <h1>Daftar Penerbit</h1>
    <?php if ($this->session->userdata('level') == 'admin') { ?>
    <a href="<?php echo base_url('penerbit/tambah'); ?>">Tambah Penerbit</a> 
    <?php } ?>
    <table border="1">
        <tr> 
            <th>ID</th> 
            <th>Nama</th> 
            <th>Alamat</th> 
            <th>Telepon</th> 
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <th>Aksi</th> 
            <?php } ?>
        </tr> 
        <?php foreach ($penerbit as $p) { ?>
        <tr> 
            <td><?php echo $p->id; ?></td> 
            <td><?php echo $p->nama; ?></td> 
            <td><?php echo $p->alamat; ?></td> 
            <td><?php echo $p->telepon; ?></td> 
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <td> 
                <a href="<?php echo base_url('penerbit/edit/'.$p->id); ?>">Edit</a> | 
                <a href="<?php echo base_url('penerbit/hapus/'.$p->id); ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a> 
            </td> 
            <?php } ?>
        </tr> 
        <?php } ?>
    </table>
</body>
</html