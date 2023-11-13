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
    <?php if ($this->session->get('level') == 'admin') { ?>
    <p>Anggota: 
        <select name="anggota_id">
            <?php foreach ($anggota as $a) { ?>
            <option value="<?php echo $a->id; ?>" <?php echo isset($anggota_id) && $anggota_id == $a->id ? 'selected' : ''; ?>><?php echo $a->nama; ?></option>
            <?php } ?>
        </select>
    </p>
    <?php } else { ?>
    <input type="hidden" name="anggota_id" value="<?php echo $this->session->get('id'); ?>">
    <?php } ?>
    <p>Buku: 
        <select name="buku_id">
            <?php foreach ($buku as $b) { ?>
            <option value="<?php echo $b->id; ?>" <?php echo isset($buku_id) && $buku_id == $b->id ? 'selected' : ''; ?>><?php echo $b->judul; ?></option>
            <?php } ?>
        </select>
    </p>
    <p>Tanggal Pinjam: <input type="date" name="tanggal_pinjam" value="<?php echo isset($tanggal_pinjam) ? $tanggal_pinjam : ''; ?>"></p>
    <p>Tanggal Kembali: <input type="date" name="tanggal_kembali" value="<?php echo isset($tanggal_kembali) ? $tanggal_kembali : ''; ?>"></p>
    <p>Denda: <input type="number" name="denda" value="<?php echo isset($denda) ? $denda : ''; ?>"></p>
    <p><input type="submit" value="Simpan"></p>
    <?php echo form_close(); ?>
</body>
</html>
