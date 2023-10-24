<style>
table tr th,
table tr td {
    border: 1 px solid black;
}
</style>
<a href="<?=base_url('/Koleksi/form')?>">Tambah data</a>
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
            <td><?=$v['nomor_koleksi'] ?></td>
            <td><?=$v['status_koleksi'] ?></td>
            <td>
                <form onsubmit="return confirm('Apakah ingin dihapus?')" action="<?=base_url('Koleksi/hapus')?>"
                    method="post">
                    <input type="hidden" name="id" value="<?=$v['id']?>" />
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>