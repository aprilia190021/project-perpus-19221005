<style>
table tr th,
table tr td {
    border: 1 px solid black;
}
</style>
<a href="<?=base_url('/Anggota/form')?>">Tambah data</a>
<table style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nama_lengkap</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Notelp</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_anggota as $k=>$v): ?>
        <tr>
            <td><?=$v['nama_lengkap'] ?></td>
            <td><?=$v['alamat'] ?></td>
            <td><?=$v['kota'] ?></td>
            <td><?=$v['notelp'] ?></td>
            <td><?=$v['email'] ?></td>
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