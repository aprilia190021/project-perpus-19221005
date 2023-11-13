<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengguna</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <a href="<?php echo base_url('pengguna/tambah'); ?>">Tambah Pengguna</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($pengguna as $p) { ?>
        <tr>
            <td><?php echo $p->id; ?></td>
            <td><?php echo $p->nama; ?></td>
            <td><?php echo $p->email; ?></td>
            <td><?php echo $p->level; ?></td>
            <td>
                <a href="<?php echo base_url('pengguna/edit/'.$p->id); ?>">Edit</a> |
                <a href="<?php echo base_url('pengguna/hapus/'.$p->id); ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>