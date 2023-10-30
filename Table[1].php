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
            <th>Jumlah Koleksi</th>
            <th>Status Koleksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_koleksi as $k=>$v): ?>
        <tr>
            <td><?=$v['nama_pengguna'] ?></td>
            <td><?=$v['identitas_pengguna'] ?></td>
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