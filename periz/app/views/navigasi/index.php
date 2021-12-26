<article>
    <h2 class="navigasihead">Edit Navigasi</h2>
    <table border=1 class="tabledata">
        <tr>
            <th>Nama Nav</th>
            <th>Link Nav</th>
            <th>Opsi</th>
        </tr>
        <?php foreach ($data['nav'] as $nav) : ?>
            <tr>
                <td><?= $nav['nav_main']; ?></td>
                <td><?= $nav['nav_link']; ?></td>
                <td><a href="<?= BASEURL; ?>/navigasi/ubah/<?= $nav['id_nav']; ?>"><button class="button_ubah">Ubah</button></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <h2 class="navigasihead">Edit Navigasi Child</h2>
    <table border=1 class="tabledata">
        <tr>
            <th>Nama Child</th>
            <th>Link Child</th>
            <th>Opsi</th>
        </tr>
        <?php foreach ($data['child'] as $child) : ?>
            <tr>
                <td><?= $child['child_name']; ?></td>
                <td><?= $child['child_link']; ?></td>
                <td><a href="<?= BASEURL; ?>/navigasi/ubahChild/<?= $child['id_child']; ?>"><button class="button_ubah">Ubah</button></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</article>