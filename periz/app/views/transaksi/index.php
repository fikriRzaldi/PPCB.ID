<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table border=1 class="tabledata">
        <tr>
            <th>Nama Perusahaan</th>
            <th>Nama Izin</th>
            <th>Merk </th>
            <th>Status</th>
            <th colspan="2">Opsi</th>
        </tr>
        <?php foreach ($data['trns'] as $trns) : ?>
            <tr>
                <td><?= $trns['nama_perusahaan']; ?></td>
                <td><?= $trns['nama_izin']; ?></td>
                <td><?= $trns['merk_usaha']; ?></td>
                <td><?= $trns['approval']; ?></td>
                <td> <a href="<?= BASEURL; ?>/transaksi/detail/<?= $trns['id_transaksi']; ?>"><button class="button_detail">Detail</button></a>
                    <a href="<?= BASEURL; ?>/transaksi/hapus/<?= $trns['id_transaksi']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="button_hapus">Hapus</button></a>
                </td>
            </tr>
        <?php endforeach; ?>


    </table>
    <a href="<?= BASEURL; ?>/transaksi/tambah/"><button class="button_tambah">Tambah</button></a>
</article>