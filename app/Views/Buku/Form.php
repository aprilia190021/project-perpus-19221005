<!DOCTYPE html>
<html>

<head>
    <title>Create Buku</title>
</head>

<body>

    <h1>Create Buku</h1>

    <form action="<?= base_url('Buku/create') ?>" method="post">
        <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
        <label for="judul">Judul</label>
        <input type="text" name="judul" value="<?=$data['judul'] ?? ''?>" required><br>

        <label for="edisi">Edisi</label>
        <input type="text" name="edisi" value="<?=$data['edisi'] ?? ''?>" required><br>

        <label for="cetakan">Cetakan</label>
        <input type="text" name="cetakan" value="<?=$data['cetakan'] ?? ''?>" required><br>

        <label for="sinopsis">Sinopsis</label>
        <input type="text" name="sinopsis" value="<?=$data['sinopsis'] ?? ''?>" required><br>

        <label for="halaman">Halaman</label>
        <input type="text" name="halaman" value="<?=$data['halaman'] ?? ''?>" required><br>

        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" value="<?=$data['penulis'] ?? ''?>" required><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>