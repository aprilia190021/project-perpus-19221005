<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>
    <?php echo form_open($aksi); ?>
    <?php if (isset($id)) { ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <?php } ?>
    <p>Nama: <input type="text" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>"></p>
    <p>Alamat: <input type="text" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>"></p>
    <p>Telepon: <input type="text" name="telepon" value="<?php echo isset($telepon) ? $telepon : ''; ?>"></p>
    <p><input type="submit" value="Simpan"></p>
    <?php echo form_close(); ?>
</body>
</html>