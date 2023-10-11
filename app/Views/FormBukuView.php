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
    <p>Judul: <input type="text" name="judul" value="<?php echo isset($judul) ? $judul : ''; ?>"></p>
    <p>Penerbit:
        <select name="penerbit_id">
            <?php foreach ($penerbit as $p) { ?>
            <option value="<?php echo $p->id; ?>"
                <?php echo isset($penerbit_id) && $penerbit_id == $p->id ? 'selected' : ''; ?>><?php echo $p->nama; ?>
            </option>
            <?php } ?>
        </select>
    </p>
    <p>Kategori:
        <select name="kategori_id">
            <?php foreach ($kategori as $k) { ?>
            <option value="<?php echo $k->id; ?>"
                <?php echo isset($kategori_id) && $kategori_id == $k->id ? 'selected' : ''; ?>><?php echo $k->nama; ?>
            </option>
            <?php } ?>
        </select>
    </p>
    <p>Tahun: <input type="number" name="tahun" value="<?php echo isset($tahun) ? $tahun : ''; ?>"></p>
    <p>Stok: <input type="number" name="stok" value="<?php echo isset($stok) ? $stok : ''; ?>"></p>
    <p><input type="submit" value="Simpan"></p>
    <?php echo form_close(); ?>
</body>

</html>
