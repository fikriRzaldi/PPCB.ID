<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table border=1 class="tabledata">
        <tr>
            <th>Nama Perusahaan</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
        <?php foreach ($data['perusahaan'] as $perusahaan) : ?>
            <tr>
                <td><?= $perusahaan['nama_perusahaan']; ?></td>
                <td><a href="<?= BASEURL; ?>/perusahaan/ubah/<?= $perusahaan['id_perusahaan']; ?>"><button class="button_ubah">Ubah</button></a></td>
                <td><a href="<?= BASEURL; ?>/perusahaan/hapus/<?= $perusahaan['id_perusahaan']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="button_hapus">Hapus</button></a></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <a href="<?= BASEURL; ?>/perusahaan/tambah/"><button class="button_tambah">Tambah</button></a>
</article>