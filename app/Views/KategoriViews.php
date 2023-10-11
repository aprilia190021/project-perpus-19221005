<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori</title>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <?php if ($this->session->userdata('level') == 'admin') { ?>
    <a href="<?php echo base_url('kategori/tambah'); ?>">Tambah Kategori</a> 
    <?php } ?>
    <table border="1">
        <tr> 
            <th>ID</th> 
            <th>Nama</th> 
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <th>Aksi</th> 
            <?php } ?>
        </tr> 
        <?php foreach ($kategori as $k) { ?>
        <tr> 
            <td><?php echo $k->id; ?></td> 
            <td><?php echo $k->nama; ?></td> 
            <?php if ($this->session->userdata('level') == 'admin') { ?>
            <td> 
                <a href="<?php echo base_url('kategori/edit/'.$k->id); ?>">Edit</a> | 
                <a href="<?php echo base_url('kategori/hapus/'.$k->id); ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a> 
            </td> 
            <?php } ?>
        </tr> 
        <?php } ?>
    </table>
</body>
</html>