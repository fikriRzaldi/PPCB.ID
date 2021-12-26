<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table border=1 class="tabledata">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th colspan="2">Opsi</th>
        </tr>
        <?php foreach ($data['akun'] as $akun) : ?>
            <tr>
                <td><?= $akun['username']; ?></td>
                <td><?= $akun['password']; ?></td>
                <td><a href="<?= BASEURL; ?>/akun/ubah/<?= $akun['id_akun']; ?>"><button class="button_ubah">Ubah</button></a></td>
                <td><a href="<?= BASEURL; ?>/akun/hapus/<?= $akun['id_akun']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="button_hapus">Hapus</button></a></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <a href="<?= BASEURL; ?>/akun/tambah/"><button class="button_tambah">Tambah</button></a>
</article>