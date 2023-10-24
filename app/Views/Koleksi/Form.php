<!DOCTYPE html>
<html>

<head>
    <title>Create Koleksi</title>
</head>

<body>

    <h1>Create Koleksi</h1>

    <form action="<?= base_url('Koleksi/create') ?>" method="post">
        <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
        <label for="nomor_koleksi">Nomor Koleksi</label>
        <input type="text" name="nomor_koleksi" value="<?=$data['nomor_koleksi'] ?? ''?>" required><br>

        <label for="status_koleksi">Status Koleksi</label>
        <input type="text" name="status_koleksi" value="<?=$data['status_koleksi'] ?? ''?>" required><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>