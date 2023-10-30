<style>
table tr th,
table tr td {
    border: 1 px solid black;
}
</style>
<a href="<?=base_url('/Pengguna/form')?>">Tambah data</a>
<table style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Email</th>
            <th>Nama Lengkap</th>
            <th>Katasandi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_pengguna as $k=>$v): ?>
        <tr>
            <td><?=$v['email'] ?></td>
            <td><?=$v['nama_lengkap'] ?></td>
            <td><?=$v['katasandi'] ?></td>
            <td>
                <form onsubmit="return confirm('Apakah ingin dihapus?')" action="<?=base_url('Pengguna/hapus')?>"
                    method="post">
                    <input type="hidden" name="id" value="<?=$v['id']?>" />
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>