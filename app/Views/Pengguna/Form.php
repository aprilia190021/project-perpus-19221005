<!DOCTYPE html>
<html>

<head>
    <title>Create Pengguna</title>
</head>

<body>

    <h1>Create Pengguna</h1>

    <form action="<?= base_url('Pengguna/create') ?>" method="post">
        <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
        <label for="email">email</label>
        <input type="text" name="email" value="<?=$data['email'] ?? ''?>" required><br>

        <label for="nama_lengkap">nama lengkap</label>
        <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" required><br>

        <label for="nama_lengkap">nama lengkap</label>
        <input type="text" name="katasandi" value="<?=$data['katasandi'] ?? ''?>" required><br>

        <input type="submit" value="submit">
    </form>

</body>

</html>