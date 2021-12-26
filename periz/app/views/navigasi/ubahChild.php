<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/navigasi/ubahDataChild" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['childId']['id_child'] ?>" readonly name="id_child" id="id_child">
            <tr>
                <td><label for="child_name">Nama Child</label></td>
                <td>:</td>
                <td><input type="text" name="child_name" id="child_name" value="<?= $data['childId']['child_name']; ?>"></td>
            </tr>
            <tr>
                <td><label for="child_link">Link Child</label></td>
                <td>:</td>
                <td><input type="text" name="child_link" id="child_link" value="<?= $data['childId']['child_link']; ?>"></td>
            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">UBAH</button></td>
            </tr>
        </table>
        <a href="<?= BASEURL; ?>/Navigasi/index/"><button class="button_kembali">Kembali</button></a>
</article>