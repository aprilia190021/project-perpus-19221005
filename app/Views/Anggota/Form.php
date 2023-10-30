<!DOCTYPE html>
<html>

<head>
    <title>Create Anggota</title>
</head>

<body>

    <h1>Create Anggota</h1>

    <form action="<?= base_url('Anggota/create') ?>" method="post">
        <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
        <label for="nama_lengkap">nama_lengkap</label>
        <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" required><br>

        <label for="alamat">alamat</label>
        <input type="text" name="alamat" value="<?=$data['alamat'] ?? ''?>" required><br>

        <label for="kota">kota</label>
        <input type="text" name="kota" value="<?=$data['kota'] ?? ''?>" required><br>

        <label for="notelp">notelp</label>
        <input type="text" name="notelp" value="<?=$data['notelp'] ?? ''?>" required><br>

        <label for="email">email</label>
        <input type="text" name="email" value="<?=$data['email'] ?? ''?>" required><br>

        <input type="submit" value="submit">
    </form>

</body>

</html>