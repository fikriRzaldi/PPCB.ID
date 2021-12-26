<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table border=1 class="tabledata">
        <tr>
            <th>Aside FAQ</th>
            <th>FAQ Answer</th>
            <th colspan="2">Opsi</th>
        </tr>
        <?php foreach ($data['aside'] as $aside) : ?>
            <tr>
                <td><?= $aside['aside_faq']; ?></td>
                <td><?= $aside['faq_answer']; ?></td>
                <td><a href="<?= BASEURL; ?>/aside/ubah/<?= $aside['id_aside']; ?>"><button class="button_ubah">Ubah</button></a>
                <td><a href="<?= BASEURL; ?>/aside/hapus/<?= $aside['id_aside']; ?>" onclick="return confirm('Ingin menghapus data?');"><button class="button_hapus">hapus</button></a></td>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
    <a href="<?= BASEURL; ?>/aside/tambah/"><button class="button_tambah">Tambah</button></a>
</article>